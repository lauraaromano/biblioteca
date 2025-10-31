CREATE DATABASE IF NOT EXISTS `biblioteca_blook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `biblioteca_blook`;

CREATE TABLE Autores (
    id_autor INT PRIMARY KEY AUTO_INCREMENT,
    nome_autor VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(50),
    data_nascimento DATE
);

CREATE TABLE Generos (
    id_genero INT PRIMARY KEY AUTO_INCREMENT,
    nome_genero VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE Usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
    tipo_usuario ENUM('admin', 'leitor') NOT NULL DEFAULT 'leitor'
);

CREATE TABLE Livros (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    id_autor INT,
    id_genero INT,
    ano_publicacao INT,
    isbn VARCHAR(20) UNIQUE,
    edicao VARCHAR(50),
    quantidade_total INT NOT NULL DEFAULT 1,
    quantidade_disponivel INT NOT NULL DEFAULT 1,
    FOREIGN KEY (id_autor) REFERENCES Autores(id_autor),
    FOREIGN KEY (id_genero) REFERENCES Generos(id_genero)
);

CREATE TABLE Emprestimos (
    id_emprestimo INT PRIMARY KEY AUTO_INCREMENT,
    id_livro INT NOT NULL,
    id_usuario INT NOT NULL,
    data_emprestimo DATE NOT NULL,
    data_prevista_devolucao DATE NOT NULL,
    data_devolucao DATE,
    status ENUM('emprestado', 'devolvido', 'atrasado') NOT NULL DEFAULT 'emprestado',
    FOREIGN KEY (id_livro) REFERENCES Livros(id_livro),
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario)
);

CREATE TABLE Reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    id_livro INT NOT NULL,
    id_usuario INT NOT NULL,
    data_reserva DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('ativa', 'cancelada', 'atendida') NOT NULL DEFAULT 'ativa',
    FOREIGN KEY (id_livro) REFERENCES Livros(id_livro),
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario),
    UNIQUE KEY (id_livro, id_usuario, status)
);

INSERT INTO Generos (nome_genero) VALUES
('Romance'),
('Ficção Científica'),
('Não-Ficção'),
('Fantasia'),
('Suspense');

INSERT INTO Autores (nome_autor, nacionalidade, data_nascimento) VALUES
('Taylor Jenkins Reid', 'Americana', '1983-12-20'),
('Colleen Hoover', 'Americana', '1979-12-11');

INSERT INTO Livros (titulo, id_autor, id_genero, ano_publicacao, isbn, quantidade_total, quantidade_disponivel) VALUES
('Os Sete Maridos de Evelyn Hugo', 1, 1, 2017, '9788584390978', 5, 5),
('Daisy Jones & The Six', 1, 1, 2019, '9788584391623', 3, 2),
('É Assim que Acaba', 2, 1, 2016, '9788501112520', 10, 10);

INSERT INTO Usuarios (nome, email, senha, tipo_usuario) VALUES
('Usuário Padrão', 'usuario@email.com', 'hash_da_senha_do_usuario', 'leitor'),
('Admin Blook', 'admin@blook.com', 'hash_da_senha_do_admin', 'admin');

INSERT INTO Emprestimos (id_livro, id_usuario, data_emprestimo, data_prevista_devolucao) VALUES
(2, 1, CURDATE(), DATE_ADD(CURDATE(), INTERVAL 15 DAY));