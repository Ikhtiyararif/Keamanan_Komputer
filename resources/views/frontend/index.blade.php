@extends('layouts.front')

@section('title')
    Welcome to Milaif Ecommerce
@endsection

@section('content')
    @include('layouts.inc.slider')
  
    <div class="py-3">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Featured Products</h3> <hr>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                        <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}">
                            <div class="card"> 
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Images">
                                <div class="card-body">
                                    <h5 class="teks">{{ $prod->name }}</h5>
                                    <span class="float-start"><b>Rp. {{ $prod->selling_price }}</b></span> <br>
                                    <span class="float-start"><s>Rp. {{ $prod->original_price }} </s></span>
                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Trending Categories</h3> <hr>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('category/'.$tcategory->slug) }}">
                            <div class="card"> 
                                <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Category Images">
                                <div class="card-body text-dark">
                                    <h5 class="teks"> {{ $tcategory->name }}</h5>
                                    <p>{{ $tcategory->description }}</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
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
}
@media screen and (min-width: 1000px){
    .card-body{
        font-size: 17px;
    }
    .teks{
        font-size: 20px;
    }
}
</style>
@endsection

