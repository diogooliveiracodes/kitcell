@extends('layouts.homenavbar')

@section('content')
    
<div class="p-4">
    <form method="POST" action="{{route('blogupdate', ['blog' =>$blog])}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$blog->titulo}}">
    </div>
    
    <div class="form-group">
        <label for="arquivo">Selecione a imagem:</label>
        <input type="file" class="form-control-file" id="arquivo" name="arquivo">
        <small>É importante o arquivo estar na proporção 900x300</small>
    </div>
    
    <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea class="form-control" id="conteudo" name="conteudo" rows="10">{{$blog->conteudo}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
    </form>
</div>
@endsection
