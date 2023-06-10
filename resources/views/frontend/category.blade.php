@extends('layouts.front')

@section('title')
    Category
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">All Category</h3> <hr>
                    <div class="row">
                        @foreach ($category as $cate)
                        <div class="col-md-3 mb-3">
                            <a href="{{ url('category/'.$cate->slug) }}">
                            <div class="card"> 
                                <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Category Images">
                                <div class="card-body text-dark">
                                    <h5>{{ $cate->name }}</h5>
                                    <p>
                                        {{ $cate->description }}
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection