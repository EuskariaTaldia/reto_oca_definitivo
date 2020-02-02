<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS PERSONAL -->
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">

    <title>DESAYUNOS FEMINISTAS</title>
    <link rel='shortcut icon' type='image/x-icon' href='../public/images/logo.png'/>

  </head>

  <body>

    {{-- INCLUDE SIN ; --}}
    @include('partials.navbar')

    {{-- INCLUIMOS UN CONTAINER QUE CADA PAGINA TENDRÁ SU CONTENIDO --}}
    <div class="container dataContainer backgroundImg">
      @yield('content')
    </div>

    <a id='backtotop' href='#top'><i class='fa fa-chevron-up'></i></a>
    
    
    {{-- FOOTER --}}
    <footer class="container-fluid footerBg py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5 leftPart">
                <h6> Echa un vistazo</h6>              
                  <ul>
                    <li> <a href="https://desayunosfeministascantabria.wordpress.com" target="_blank"> Inicio</a> </li>
                    <li> <a href="https://desayunosfeministascantabria.wordpress.com/entradas/" target="_blank"> ¿Quienes somos? </a> </li>
                    <li> <a href="https://desayunosfeministascantabria.wordpress.com/contacto/" target="_blank"> Contacto</a> </li>
                  </ul>
              </div>

              <div class="col-md-6 float-right"> 
                <h6> Redes Sociales</h6>
                <p>Siguenos en nuestras redes sociales si quieres estar al tanto de lo que hacemos!</p>
                <div class="social">
                  <a href="https://desayunosfeministascantabria.wordpress.com" target="_blank"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
                  <a href="https://www.facebook.com/desayunos.feministas.188" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-5">
            <div class="row">
              <div class="col-md-6 float-right creadores"> 
                <h6> CREADORES</h6>
                <ul>
                  <li> Ruben Gonzalez </li>
                  <li> Alex Mendiluce </li>
                  <li> Nahia Maguregui </li>
                  <li> Gorka Intxausti </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    {{-- OUR SCRIPTS --}}
    <script src="../resources/js/myJavascript.js" ></script>
    <script src="../resources/js/edit.js" ></script>
    <script src="../resources/js/main.js"></script>
    <script src="../resources/js/backtotop.js"></script>
    <script src="../resources/js/validacion.js"></script>

  </body>
</html>