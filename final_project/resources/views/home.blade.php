@extends('layouts.app')

@section('content')
<div class="container ">
    <h2 class="text-center">products</h2>
    <div class="row ">

        @foreach ($allProducts as $product)
            @if ($product->quantity > 0)

            <div class="col-4 ">
                <div class="card" style="margin-bottom: 20px;">
                    <div style="width:100%; text-align:center">
                        <img class="card-img-top " src="{{asset('upload/adImages')}}/{{$product->cover_img}}" alt="Card image cap" style="width: 300px; height: 200px;">
                    </div>
                    <div class="card-body">

                            <h4 class="card-title text-muted text-center">{{$product->description}} {{$product->name}}</h4>
                            <p class="card-text">Unit price  :{{$product->price}}</p>
                            <p class="card-text">Quantity  :{{$product->quantity}}</p>
                            <p class="card-text">Contact number: {{$product->phone_no}}</p>
                        </div>
                        <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
                            <!-- <a href="#" class="card-link">Another link</a> -->
                        </div>
                </div>
            </div>

            @endif
        @endforeach


    </div>
</div>
@endsection
