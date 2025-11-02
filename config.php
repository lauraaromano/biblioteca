<?php
session_start();

// se o usuário não estiver logado, redireciona para login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<?php
  include 'cabecalho_painel.php'
?>

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">
         <div class="tm-page-col-left tm-welcome-box" 
            style="background-color: #669999;">
          <p class="tm-welcome-text">
            <em>"Usuário , seja bem-vindo a sua nova biblioteca virtual !"</em>
          </p>
        </div>

          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/livros9.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-pb-6">
        
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left tm-tab-links">
            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
              <li>
                <a href="#romance" class="active">
                  <div class="tm-tab-icon"></div>
                  Romance
                </a>
              </li>
              <li>
                <a href="#suspence" class="">
                  <div class="tm-tab-icon"></div>
                  Suspence
                </a>
              </li>
              <li>
                <a href="#terror" class="">
                  <div class="tm-tab-icon"></div>
                  Terror
                </a>
              </li>
            </ul>
          </div>
          <div class="tm-page-col-right">
            <h2 class="tm-text-secondary tm-mb-5">
              Organize sua leitura do seu jeito!
            </h2>
            <p class="tm-mb-6">
             No nosso acervo virtual, você tem a liberdade de organizar e acompanhar sua jornada literária de forma simples e personalizada. É possível classificar cada obra como Empréstimo, Lido ou Desejado, mantendo um controle completo sobre os livros que já passaram por suas mãos, aqueles que ainda quer explorar e os que estão em andamento. 
             <br>
             <br>
             Essa funcionalidade facilita o acompanhamento das suas leituras, ajuda a planejar futuras descobertas e torna sua experiência de leitura mais envolvente, prática e prazerosa.

              
            </p>
            
          </div>
          
        </div>
        
      </section>

      <div class="tm-page-col-right">
        <div class="row tm-pt-7 tm-pb-6">
          
<!-- ROMANCE -->
          <div class="col-md-6 tm-home-section-2-left">
            
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/carriesoto.jpg"
              id="romance"
              ></div>
            <div >
              <h3 class="tm-text-secondary tm-mb-4">
                Carrie Soto está de volta

              </h3>
              <p class="tm-mb-5">
               Carrie Soto Está de Volta conta a história da tenista Carrie, que retorna às quadras, enfrenta adversários e desafios, e luta para provar que ainda é a melhor do mundo.

           
              </p>
                <div class="text-center">
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Pegos
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Lidos
                  </button>
                 <button type="button" class="btn btn-secondary tm-btn-submit">
                    <img src="img/presente.png">
                
                </button>
                </div>
                <br>
                <br>
            </div>
          </div>
          
          <div class="col-md-6 tm-home-section-2-left">
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/assimqueacaba.jpg"></div>
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                É Assim Que Acaba
              </h3>
              <p class="tm-mb-5">
                É Assim Que Acaba conta a história de Lily, que se apaixona por Ryle, enfrenta violência e precisa tomar decisões difíceis para proteger a si mesma e quem ama.           
              </p>
              
            <div class="text-center">
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Pegos
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Lidos
                  </button>
                 <button type="button" class="btn btn-secondary tm-btn-submit">
                    <img src="img/presente.png">
                
                </button>
                </div>
                <br>

            </div>
          </div>
          <!-- SUSPENCE -->

          <div class="col-md-6 tm-home-section-2-left">
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/paciente.jpg"></div>
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                A Paciente Silenciosa
              </h3>
              <p class="tm-mb-5">
                A Paciente Silenciosa acompanha Alicia, uma pintora que, após atirar no marido, para de falar, e Theo, o terapeuta que tenta descobrir o motivo por trás de seu silêncio.        
              </p>
              
            <div class="text-center">
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Pegos
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Lidos
                  </button>
                 <button type="button" class="btn btn-secondary tm-btn-submit">
                    <img src="img/presente.png">
                
                </button>
                </div>
                <br>

            </div>
          </div>

          <div class="col-md-6 tm-home-section-2-right">
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/mentirosos.jpg"
              id="suspence"
              ></div>
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                Mentirosos
              </h3>
              <p class="tm-section-2-text">
              Mentirosos conta a história de Cadence, que após um acidente, precisa descobrir os segredos e mentiras da sua família em um verão cheio de revelações.
              </p>
              <br>
            </div>
              <div class="text-center">
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Pegos
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Lidos
                  </button>
                 <button type="button" class="btn btn-secondary tm-btn-submit">
                    <img src="img/presente.png">
                
                </button>
                </div>
                <br>
                <br>
<!-- TERROR -->
            </div>
            <div class="col-md-6 tm-home-section-2-left">
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/it.jpg"
              id="terror"></div>
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                It: A Coisa
              </h3>
              <p class="tm-mb-5">
                It: A Coisa acompanha um grupo de amigos que enfrenta seus maiores medos ao encarar Pennywise, um palhaço assustador que aterroriza a cidade de Derry.       
              </p>
              
            <div class="text-center">
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Pegos
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary tm-btn-submit">
                    Lidos
                  </button>
                 <button type="button" class="btn btn-secondary tm-btn-submit">
                    <img src="img/presente.png">
                
                </button>
                </div>
                <br>

            </div>
          </div>
          </div>

        </div>

        
      </div>
      <!-- row -->


      
<?php
  include 'footer.php'
?>