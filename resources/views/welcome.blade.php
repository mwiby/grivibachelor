<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grivi Klær</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        <div id="app">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-sm sass-container">
                <div class="">
            <a class="navbar-brand" href="/">
              <img src="img/griviklær.jpg" alt="Grivi Klær" width="90" height="90" class="nav-logo">
            </a>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
              <ul class="navbar-nav justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
                <li class="nav-item">
                  <a class="nav-link nav-button"><router-link to="/herre">Herre</router-link></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-button"><router-link to="/dame">Dame</router-link></a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link nav-button"><router-link to="/omoss">Om oss</router-link></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-button"><router-link to="/kontakt">Kontakt</router-link></a>
                </li>
              </ul>
          </nav>
            <!-- End top-nav -->

            <router-view :key="$route.path"></router-view>

            <!-- Footer -->
            <footer>
                <!-- Column for contact information -->
                <div class="row sass-container pt-5 text-center">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul>
                            <li><h2>Kontakt oss:</h2></li>
                            <li><i class="fas fa-phone"></i> 35 95 24 24</li>
                            <li><i class="far fa-envelope"></i> ggrivi@gmail.com</li>
                        </ul>
                    </div>
                    <!-- column for social media -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul>
                        <li><h2>Sosiale medier:</h2></li>
                        <li><a href="https://www.facebook.com/grivigrivi"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/griviklaer/"><i class="fa fa-instagram"></i> Instagram</a></li>
                    </ul>
                    </div>
                    <!-- column for copyright -->
                    <div class="col-12 footer-btm">
                        <ul><p class="copyright">Grivi Klær © 2020</p></ul>
                    </div>
                </div> <!-- end footer-content -->
    
            </footer>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
