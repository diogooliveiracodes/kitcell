@extends('layouts.app')

@section('content')


<h4 class="m-4">Confira nossos serviços:</h4>
<!-- CARDS 01 -->
<div class="row justify-content-center m-0 p-0" >
    @foreach($celulares as $celular)
    <div class="col-md-2 card my-4 mx-3" >
        <img src="https://kitcell-bucket.s3.sa-east-1.amazonaws.com{{$celular->url}}" alt="" class="mt-1 img-fluid" height="152px" >
        <p style="font-size: 1rem">{{$celular->nome}}</p>
        <hr>
        <p>{{$celular->descricao}}</p>

    </div>
    @endforeach
</div>

@endsection