@extends('layouts.homenavbar')

@section('content')
    
<div class="p-4">
    <form method="POST" action="{{route('celularupdate', ['celular' => $celular])}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nome">Título:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$celular->nome}}">
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" value="{{$celular->preco}}">
        <small class="text-danger"><strong> Preencha somente os números. ex: 99,99</strong></small>
    </div>

    
    <div class="form-group">
        <label for="arquivo">Selecione a imagem:</label>
        <input type="file" class="form-control-file" id="arquivo" name="arquivo">
        <small class="text-danger">É importante o arquivo estar na proporção 900x300</small>
    </div>
    
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="10">{{$celular->descricao}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
    </form>
</div>
@endsection