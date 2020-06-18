@extends('layouts.homenavbar')

@section('content')
    
<div class="p-4">
    <form method="POST" action="{{route('celularstore')}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nome">Título:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Título" required>
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" required>
        <small class="text-danger"><strong> Preencha somente os números. ex: 99,99</strong></small>
    </div>

    
    <div class="form-group">
        <label for="arquivo">Selecione a imagem:</label>
        <input type="file" class="form-control-file" id="arquivo" name="arquivo" required>
        <small class="text-danger">É importante o arquivo estar na proporção 300x300</small>
    </div>
    
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
    </form>
</div>



    <!-- CARDS 01 -->
    <div class="row m-0 p-0" >
        @foreach($celulares as $celular)
        <div class="col-md-2 card m-4" >
            <img src="https://kitcell-bucket.s3.sa-east-1.amazonaws.com{{$celular->url}}" alt="" class="mt-1 img-fluid" height="152px" >
            <p style="font-size: 1rem">{{$celular->nome}}</p>
            <hr>
            <p>{{$celular->descricao}}</p>
            <p class="pb-0 mb-0"><strong>R${{$celular->preco}}</strong></p>
            <div class="row justify-content-center">
                <form method="post" action="{{route('celulardelete', ['celular' =>$celular])}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-lg m-2">Deletar</button>
                </form>
                <form method="get" action="{{route('celularedit', ['celular' =>$celular])}}">
                    @csrf
                    <button class="btn btn-success btn-lg m-2">Editar</button>
                </form>
                </div>
        </div>
        @endforeach
    </div>
@endsection