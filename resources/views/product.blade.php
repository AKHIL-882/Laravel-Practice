@extends('master')
@section('content')

<div class="container custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product)
            <div class="carousel-item product {{$product['id']==1?'active':''}}">
                <img class="d-block w-100 slider-img" src="{{$product['gallery']}}">
            </div>
            @endforeach

        </div>
        <a class=" carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper container mt-30">
        <h3 style="text-align:center">Trending Products</h3>
        <div class="carousel-inner">
            @foreach ($products as $product)
            <div class="product trending-item">
                <img class="trending-image" src="{{$product['gallery']}}">
                <h3>{{$product['name']}}</h3>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection