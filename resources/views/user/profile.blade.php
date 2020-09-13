@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($products->chunk(3) as $productChunk) 
    <div class="row">
        @foreach ($productChunk as $product) 
        <div class="col-sm-6 col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{ $product->imagePath }}" class="card-img-top img-responsive" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <div class="float-left price">${{ $product->price }}</div>    
                <a href="#" class="btn btn-success float-right">Add to Cart </a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection
