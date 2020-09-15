<?php setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");  ?>

<!-- OCULTAR MENSAGENS DE ERRO -->
<?php
error_reporting(0);
?>
<!-- OCULTAR MENSAGENS DE ERRO -->

<!doctype html>
<html lang="pt_BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- font awesome 5 free -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- Poppins font from Google -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/app.css">

  <title>Conversor Binário</title>
</head>

<body>

    <!--Offer Alert ================================ -->
     <div class="offer-alert">
       <div class="offer-alert__container container">
         <span>🔥😍 Conversor Binário</span> 
       </div>
     </div>
    
  <!--Hero ====================================== -->
  <!--Menu ====================================== -->
  <header class="hero container-fluid border-bottom">
    <nav class="hero-nav container px-4 px-lg-0 mx-auto">
      <ul class="nav w-100 list-unstyled align-items-center p-0">
        <li class="hero-nav__item">
          <img class="hero-nav__logo" src="assets/imgs/logo-1.svg">
        </li>
       <!-- <li id="hero-menu" class="flex-grow-1 hero__nav-list hero__nav-list--mobile-menu ft-menu">
          <ul class="hero__menu-content nav flex-column flex-lg-row ft-menu__slider animated list-unstyled p-2 p-lg-0">
            <li class="flex-grow-1">
              <ul class="nav nav--lg-side list-unstyled align-items-center p-0">
                <!<li class="hero-nav__item">
                  <a href="#contact-us" class="hero-nav__link">Contact Us</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#faq" class="hero-nav__link">FAQ</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#pricing" class="hero-nav__link">Pricing</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#testimonials" class="hero-nav__link">Testimonials</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#features" class="hero-nav__link">Features</a>
                </li>-->
                <li class="hero-nav__item">
                  <a href="index.php" class="hero-nav__link">Inicio</a>
                </li>
              </ul>
            </li>
          </ul>
          <!--Fim Menu ====================================== -->
          <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
            class="ft-menu__close-btn animated">
            <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </li>
        <li class="d-lg-none flex-grow-1 d-flex flex-row-reverse hero-nav__item">
          <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
            class="text-center px-2">
            <i class="fas fa-bars"></i>
          </button>
        </li>
      </ul>
    </nav>
    <div class="hero__content container mx-auto">
      <div class="row px-0 mx-0 align-items-center">
        <div class="col-lg-6 px-0">
          <h1 class="hero__title mb-3">
            FAÇA CONVERSÕES <span class="highlight">AQUI</span> CONOSCO
          </h1>
          <!--<p class="hero__paragraph mb-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard
          </p>-->
          <div class="hero__btns-container">
            <a class="hero__btn btn btn-primary mb-2 mb-lg-0" href="#">
              Binário -> Decimal
            </a>
            <a class="hero__btn btn btn-secondary mx-lg-3" href="#">
              Decimal -> Binário
            </a>
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
          <div class="hero__img-container">
            <div class="jumbotron">
              
              <form action="index.php" method="get">
                <div class="form-group">
                  <label for="binario">VALOR BINÁRIO</label>
                    <input type="binary"  autocomplete="binario" name= "binario"  pattern="[0-1]{0,8}" class="form-control"/>
                </div>
                  <!--<button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Converter</button>-->
                    <button type="submit" class="btn btn-primary">Converter</button> <br><br>
                    
                    <table class="table table-striped table-bordered">
                      <tr>
                        <?php
                          $binario = $_GET["binario"];
                        ?>
                          
                          <td><b><?php echo bindec ( $binario );?></b></td></tr>
                    </table>

                <div class="form-group">
                  <label for="decimal">VALOR DECIMAL</label>
                    <input type="text"  autocomplete="decimal" name= "decimal"  pattern="[0-9]{0,8}" class="form-control"/>
                </div>
                  <!--<button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Converter</button>-->
                    <button type="submit" class="btn btn-primary">Converter</button> <br><br>
                    
                    <table class="table table-striped table-bordered">
                      <tr>
                        <?php
                          $decimal = $_GET["decimal"];
                        ?>
                          
                          <td><b><?php echo decbin ( $decimal ); ?></b></td></tr>
                    </table>
                 </div>
                 </form>
</div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ===================================== -->


  <!-- ===================================== -->

  
  <!-- ======================================== -->

  <div id="testimonials" class="block-20 space-between-blocks" >
    <div class="container">
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">Entenda Como Funciona</h1>
        <p class="block__paragraph">
          Entender como funciona o sistema binário e as suas conversões para outros sistemas numéricos é essencial para compreender o funcionamento de computadores e máquinas modernas.
        </p>
      </div>
      <div class="row px-2 pt-4">
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
               No sistema binário cada posição tem um peso de uma potência de 2 (base do sistema binário). Sendo assim, para se converter um número de binário para decimal, deve-se multiplicar cada bit pela potência de sua posição e somar os resultados.
              Por exemplo, a conversão do número 1011  para decimal é feita da seguinte forma: <br>
           </p>

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Binário</th>
      <th scope="col">Posição</th>
      <th scope="col">Calculo</th>
      <th scope="col">Resultado </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1 X 2³</td>
      <td>8</td>
      <td rowspan="3"> 11</td>
     
    </tr>
    <tr>
      <th scope="row">0</th>
      <td>0 X 2²</td>
      <td>0</td>
     
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>1 X 2¹</td>
      <td>2</td>
      
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>1 X 2°</td>
      <td>1</td>
    </tr>
    
  </tbody>
</table>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.jpg">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Binário para Decimal</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
       
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
                Para realizar a conversão de decimal para binário, realiza-se a divisão sucessiva por 2 (base do sistema binário). O resultado da conversão será dado pelo último quociente e o agrupamento dos restos de divisão será o número binário.<br>
                <img src="assets/imgs/decimal-binário.jpg" alt="some text" width=284 height=194>
              
                A leitura do resultado é feita do último quociente para o primeiro resto. Sendo assim, o resultado da conversão do número 45 para binário é: 101101.

            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.jpg">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Decimal para Binário</span>
                
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div> 
      </div>
    </div>
  </div>

  <!-- =================================== -->

  

 

  <div class="block-44 py-5">
    <div class="container">
      <div class="row px-0 mx-0 justify-content-center align-items-center">
        <div class="block-44__logo-container">
          <img  src="assets/imgs/logo-1.svg">
        </div>
        <ul class="block-44__list list-unstyled justify-content-center mb-0">
         
          <li class="block-44__li-1">
            <a href="https://www.linkedin.com/in/ueslei-xavier/" class="block-44__link">Contato</a>
          </li>
        </ul>
      </div>
    </div>
    <hr class="block-44__divider">
    <div class="container">
      <div class="row flex-column flex-md-row px-2 justify-content-center">
        <div class="flex-grow-1">
          <ul class="block-44__extra-links d-flex list-unstyled p-0">
            
            <li class="mx-2">
              <a href="https://www.instagram.com/xavier_info/" class="block-44__link m-0">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="mx-2">
              <a href="https://www.linkedin.com/in/ueslei-xavier/" class="block-44__link m-0">
                <i class="fas fa-envelope"></i>
              </a>
            </li>
          </ul>
        </div>
        <p class="block-41__copyrights">&copy; 2020 Ueslei Xavier. Todos os Direitos Reservados.</p>
      </div>
    </div>
  </div>

  <!-- =================================== -->

  <script src="assets/app.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</body>

</html>
