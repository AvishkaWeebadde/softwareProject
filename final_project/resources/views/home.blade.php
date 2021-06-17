@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>products</h2>
    <div class="row">

        @foreach ($allProducts as $product)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('upload/adImages')}}/{{$product->cover_img}}" alt="Card image cap" style="width: 300px; height: 200px;">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->description}}</h4>
                            <p>Unit price : {{$product->price}}</p>
                            <p class="card-text">Contact number : {{$product->phone_no}}</p>
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
