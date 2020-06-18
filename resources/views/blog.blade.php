@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="row justify-content-center mt-3">
  {{ $blogs->links() }}
  
</div>
<hr>
<div class="container">
  <div class="row">
    
    <!-- Post Content Column -->
    <div class="col-lg-8">
      @foreach($blogs as $blog)

        <!-- Title -->
        <h1 class="mt-2">{{$blog->titulo}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$blog->criador}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>{{$blog->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="https://kitcell-bucket.s3.sa-east-1.amazonaws.com{{$blog->url}}" alt="">

        <hr>

        <!-- Post Content -->
        <p>{!! $blog->conteudo !!}</p>
        <hr>

    </div>

          <!-- Sidebar Widgets Column -->
          <div class="col-md-4">
    
            <!-- SOBRE -->
            <div class="card my-4">
              <h5 class="card-header"><a href="/" style="color:black"> Kitcell.com.br</a></h5>
              <div class="card-body quemsomos">
                <p>A Kitcell Celulares é uma empresa que atua na área de telecomunicações, com a venda, troca, compra, assistência de smartphones e tablets de todas as marcas, nacionais e internacionais. </p>
                <p>Atendemos toda a cidade de Sete Lagoas/MG e região, entregando um trabalho íntegro, com muita transparência e priorizando sempre os clientes e a entrega de um serviço impecável.</p>
                <p>A Kitcell Celulares está sempre dedicada a buscar a satisfação dos seus clientes, oferecendo produtos e serviços com qualidade e garantia. Trabalhamos com as melhores peças e marcas do mercado, sempre buscando o que há de mais inovador no que diz respeito a era da tecnologia de celulares.</p>
                <p>Com uma equipe aplicada e super bem treinada, levamos aos nossos clientes o ápice da satisfação desde o momento que o cliente solicita nossos serviços, até a entrega deles.</p>
              </div>
            </div>

    
          </div>
  </div>

@guest

@else
      <div class="row justify-content-center">
        <form method="post" action="{{route('blogdelete', ['blog' =>$blog])}}">
          @csrf
          @method('delete')
          <button class="btn btn-danger btn-lg m-2">Deletar</button>
        </form>
        <form method="get" action="{{route('blogedit', ['blog' =>$blog])}}">
          @csrf
          <button class="btn btn-success btn-lg m-2">Editar</button>
        </form>
      </div>
      
@endguest
@endforeach

    </div>
    <!-- /.row -->
  <hr>
  <div class="row justify-content-center mt-5">
    {{ $blogs->links() }}
  </div>
  </div>
  <!-- /.container -->

@endsection