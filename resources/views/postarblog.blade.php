@extends('layouts.homenavbar')

@section('content')
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

    bkLib.onDomLoaded(function() {
         new nicEditor().panelInstance('conteudo');
    }); // convert text area with id area1 to rich text editor.

</script>


<div class="p-4">
    <form method="POST" action="{{route('blogstore')}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
    </div>

    <div class="form-group">
        <label for="titulo">Sub-Título</label>
        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Título" required>
    </div>
    
    <div class="form-group">
        <label for="arquivo">Selecione a imagem:</label>
        <input type="file" class="form-control-file" id="arquivo" name="arquivo" required>
        <small style="color:red">É importante o arquivo estar na proporção 900x300</small>
    </div>
    
    <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea class="form-control" id="conteudo" name="conteudo" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
    </form>
</div>

@foreach($blogs as $blog)

<div class="m-5 card">
    <h4 class="card-header">{{$blog->titulo}}</h4>


        <div class="row p-2">
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

</div>

@endforeach


@endsection
