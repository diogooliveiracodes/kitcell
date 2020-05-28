<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kitcell</title>

    <!-- Scripts -->
    <script src="../js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="../css/app.css" rel="stylesheet">
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light" style="background:white">
        <a class="navbar-brand" href="{{route('welcome')}}"><img src="../img/logo.png" style="height: 2rem" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Celulares usados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quem somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog kitcell</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
           
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>

    <main class="p-0 m-0">
        @yield('content')
    </main>


    <footer class="page-footer font-small mdb-color pt-4 bg-light mt-0">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
        
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">
        
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"> Kitcell.com.br</h6>
                <p>Sua história começa aqui.</p>
            </div>
            <!-- Grid column -->
        
            <hr class="w-100 clearfix d-md-none">
        
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Produtos</h6>
                <p>
                <a href="#!">Eletrodomésticos e casa</a>
                </p>
                <p>
                <a href="#!">Celulares</a>
                </p>
                <p>
                <a href="#!">Games e PC Gamer</a>
                </p>
                <p>
                <a href="#!">Moda</a>
                </p>
            </div>
            <!-- Grid column -->
        
            <hr class="w-100 clearfix d-md-none">
        
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Links Úteis</h6>
                <p>
                <a href="#!">Submarino Viagens</a>
                </p>
                <p>
                <a href="#!">Programa de Afiliados</a>
                </p>
                <p>
                <a href="#!">Anuncie</a>
                </p>
                <p>
                <a href="#!">Venda no Sub</a>
                </p>
            </div>
        
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
        
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                <p>
                <i class="fas fa-home mr-3"></i> Rua Sacadura Cabral, 102 - Rio de Janeiro</p>
                <p>
                <i class="fas fa-envelope mr-3"></i> contato@submarino.com</p>
                <p>
                <i class="fas fa-phone mr-3"></i> + 4003-5544</p>
                <p>
                
            </div>
            <!-- Grid column -->
        
            </div>
            <!-- Footer links -->
        
            <hr>
        
            <!-- Grid row -->
            <div class="row d-flex align-items-center">
        
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">
        
                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright:
                <a href="https://mdbootstrap.com/">
                    <strong> kitcell.com.br</strong>
                </a>
                </p>
        
            </div>
            <!-- Grid column -->
        
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">
        
                <!-- Social buttons -->
                <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </li>
                </ul>
                </div>
        
            </div>
            <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
        </div>
        <!-- Footer Links -->
        
        </footer>


    
</body>
</html>
