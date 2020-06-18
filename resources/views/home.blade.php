@extends('layouts.homenavbar')

@section('content')




<div class="row justify-content-center p-0 m-0">
    <div class="card">
        <div class="card-header">
            Upload de banners
        </div>
        <div class="card-body">            
            <form method="POST" action="{{route('banner')}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                <label for="arquivo">Selecione a imagem:</label>
                <input type="file" class="form-control-file" id="arquivo" name="arquivo" required>
                <small>É importante o arquivo estar na proporção 1200x400</small>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">

    </div>
</div>

<h2 class="mt-5 mx-5">Banners:</h2>

<div class="row m-0 p-0" >
    @foreach($banners as $banner)
    <div class="col-md-2 bg-light m-3 border rounded" >
        <img src="https://kitcell-bucket.s3.sa-east-1.amazonaws.com{{$banner->url}}" alt="" class="mt-1 img-fluid" height="152px" >
        <hr>
        <div class="row justify-content-center py-3">
            <form action="{{route('delete', ['banner'=> $banner->id])}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-lg">Deletar</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection
