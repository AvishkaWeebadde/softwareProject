@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>products</h2>
    <div class="row">

        @foreach ($allProducts as $product)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('sample.jpeg')}}" alt="Card image cap" style="max-height: 100%; max-width:100%">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->name}}</h4>
                            <p>{{$product->description}}</p>
                            <p class="card-text">${{$product->price}}</p>
                        </div>
                        <div class="card-body">
                        <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
                            <!-- <a href="#" class="card-link">Another link</a> -->
                        </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
@endsection
