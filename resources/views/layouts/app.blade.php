<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kitcell</title>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


    {{-- FONTAWSOME --}}
    <script src="https://kit.fontawesome.com/9f90449050.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="../js/app.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  

    <!-- Styles -->
    <link href="../css/app.css" rel="stylesheet">
    
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{route('welcome')}}"><img src="../img/logo2.png" style="height: 2rem" alt=""> </a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span >Menu</span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('celularindex')}}">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('quemsomos')}}">Quem somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('blogindex')}}">Blog kitcell</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('contato')}}">Contato</a>
            </li>
           
            
          </ul>
            <a href="tel:3198112141" style="text-decoration: none;">
                <div style="display: flex; align-items: center; justify-content: center">
                    <i class="fas fa-phone mr-2 p-1 bg-white text-primary" style="border: 1px solid white; font-size: 0.7rem; border-radius: 5px;"></i>
                    <span class="text-white" style="font-size: 1.5rem; font-family:Impact, fantasy; letter-spacing:0.1rem;">
                        (31) 9811-2141
                    </span>
                </div>
            </a>
        </div>
    </nav>

    <main class="p-0 m-0">
        @yield('content')
    </main>


    <footer class="page-footer font-small mdb-color pt-4 mt-0" style="background:white">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
        
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">
        
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"><a href="/"> Kitcell.com.br</a></h6>
                <p>Sua história começa aqui.</p>
            </div>
            <!-- Grid column -->
        
            <hr class="w-100 clearfix d-md-none">
        
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Produtos</h6>
                <p>
                <a href="{{route('celularindex')}}">Serviços</a>
                </p>
                <p>
                <a href="{{route('blogindex')}}">Blog Kitcell</a>
                </p>
                <p>
                <a href="{{route('quemsomos')}}">Quem Somos</a>
                </p>
                <p>
                <a href="{{route('contato')}}">Contato</a>
                </p>
            </div>
            <!-- Grid column -->
        
            <hr class="w-100 clearfix d-md-none">
        
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Links Úteis</h6>
                <p>
                <a href="www.imeipro.info">Verificar IMEI</a>
                </p>
                <p>
                <a href="https://www.tudocelular.com">TudoCelular.com</a>
                </p>
                <p>
                <a href="https://www.techtudo.com.br/">TechTudo.com.br</a>
                </p>

            </div>
        
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
        
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                <p>
                <i class="fas fa-home mr-3"></i> Governador Milton Campos 352, Centro - Sete Lagoas</p>
               
                <p>
                    <a href="mailto:contato@kicell7.com.br" style="color:black"> <i class="fas fa-envelope mr-3" ></i>contato@kicell7.com.br</a>
                </p>
                <p>
                    <a href="tel:3198112141" style="color:black"><i class="fas fa-phone mr-3"></i>(31) 9811-2141</a>
                </p>
                
               
                
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
                <p class="text-center text-md-left">© 2020 Desenvolvido por:
                <a href="https://snapdev.com.br">
                    <strong>snapdev.com.br</strong>
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
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/kitcell.tels.7">
                        <i class="fab fa-facebook-f" style="color:black"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.instagram.com/kitcelll/">
                        <i class="fab fa-instagram" style="color:black"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://wa.me/553198112141">
                        <i class="fab fa-whatsapp" style="color:black"></i>
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
        
            <a class="fixada btn-floating btn-sm rgba-white-slight mx-1" href="https://wa.me/553198112141">
                <i class="fab fa-7x fa-whatsapp" style="color:#25d366"></i>
            </a>
            <style scoped>
                .fixada {
                position: fixed;
                bottom: 0;
                right: 0;
                
                
                }
            </style>
        
        

    
</body>
</html>
