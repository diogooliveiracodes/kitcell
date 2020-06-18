@extends('layouts.app')


@section('content')

<div class="row align-items-center my-5 m-0 p-0">
    <div class="col-lg-7">
        <div class="row justify-content-center m-0 p-0">
            <div class="col-sm-12 p-0 m-0">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/banner1.png" class="img-fluid d-block w-100" alt="...">
                        </div>
                        @foreach($banners as $banner)
                        <div class="carousel-item">
                            <img src="https://kitcell-bucket.s3.sa-east-1.amazonaws.com{{$banner->url}}" class="d-block w-100 p-0 m-0" alt="...">
                        </div>
                        @endforeach
                    </div>
        
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- /.col-lg-8 -->
    <div class="col-lg-5 m-0 p-0" id="lateral">
        <h1 class="font-weight-light">Kitcell Celulares</h1>
        <p>Somos uma empresa que atua na área de telecomunicações, com a venda, troca, compra, assistência de smartphones e tablets de todas as marcas, nacionais e internacionais.<p>
            <a href="{{route('contato')}}">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Entre em contato</button>
            </a>
    </div>
    <!-- /.col-md-4 -->
</div>

<script>
$(document).ready(function() {
    
if ( $(document).width() < 975 ) {
    $("#lateral").hide();
}
else {
$("#lateral").show();
}
$( window ).resize(function() {
    if ( $(document).width() < 975 ) {
    $("#lateral").hide();
}
else {
$("#lateral").show();
}
});

});
</script>



<div class="card text-white bg-primary my-2 py-4 text-center">
    <div class="card-body">
    <h5 class="text-white m-0">Confira nossos serviços:</h5>
    </div>
</div>

<!-- CARDS 01 -->
<div class="row justify-content-center m-0 p-0" >
    @foreach($celulares as $celular)
    <div class="col-md-2 card my-2 mx-3" >
        <img src="https://kitcell-bucket.s3.sa-east-1.amazonaws.com{{$celular->url}}" alt="" class="mt-1 img-fluid" height="152px" >
        <p style="font-size: 1rem"><strong>{{$celular->nome}}</strong></p>
        <hr>
        <p>{{$celular->descricao}}</p>
    </div>
    @endforeach
</div>
<div class="row justify-content-center mb-3 mt-2 m-0 p-0">
    <a href="{{route('celularindex')}}">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Mais Ofertas</button>
    </a>
</div>

<div class="card text-white bg-primary my-2 py-4 text-center">
    <div class="card-body">
    <h5 class="text-white m-0">Fique por dentro de tudo que rola no mundo dos celulares:</h5>
    </div>
</div>


<!-- BLOG TITLES -->
<div class="container mb-3" id="blogcontainer">
@foreach($blogs as $blog)
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
              <a href="{{route('blogindex')}}">
                <h2 class="post-title">
                  {{$blog->titulo}}
                </h2>
                <h3 class="post-subtitle">
                    {{$blog->subtitulo}}
                </h3>
              </a>
              <p class="post-meta">Publicado por
                <a href="#">Equipe Kitcell</a>
                {{$blog->created_at}}</p>
            </div>
            <hr>
            <!-- Pager -->

        </div>
    </div>
@endforeach
    <div class="row justify-content-center">
        <a href="{{route('blogindex')}}">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Mais Postagens</button>
        </a>
    </div>
      </div>
    


@endsection