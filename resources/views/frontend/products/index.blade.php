@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-primary border-top">
    <div class="container">
        <h6 class="mb-0 dark"> Collections /<a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a> </h6>
    </div>
</div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center">{{ $category->name }}</h3> <hr>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($products as $prod)
                    <div class="item">
                            <div class="card">
                                <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">
                                <img class="img" src="{{ asset('assets/uploads/products/'.$prod->image) }}"  alt="Product Images">
                                <div class="card-body">
                                    <h5 class="teks">{{ $prod->name }}</h5>
                                    <span class="float-start text-dark"><b>Rp. {{ $prod->selling_price }}</b></span> <br>
                                    <span class="float-start text-dark" ><s>Rp. {{ $prod->original_price }} </s></span>
                                </div>
                                </a> 
                            </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
    loop:false,
    margin:10,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        300:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

    </script>

<style>
@media screen and (min-width: 300px){
    .card-body{
        font-size: 10px;
    }
    .teks{
        font-size: 13px;
    }
    h3{
        font-size: 10px;
    }
}
@media screen and (min-width: 1000px){
    .card-body{
        font-size: 17px;
    }
    .teks{
        font-size: 20px;
    }
    h3{
        font-size: 20px;
    }
}
</style>
@endsection