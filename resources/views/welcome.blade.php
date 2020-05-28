@extends('layouts.app')


@section('content')

<div class="row justify-content-center m-0 p-0">
    <div class="col-sm-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%">
            <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="../img/carousel.png" class="d-block w-100" alt="...">
            </div>
        @foreach($banners as $banner)
            <div class="carousel-item">
                <img src="../storage/{{$banner->arquivo}}" class="d-block w-100" alt="...">
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

@endsection