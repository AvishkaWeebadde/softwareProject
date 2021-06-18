@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>MY POSTS <a href="{{route('ads.create')}}" class="btn btn-primary">create an Ad</a><hr></h1>
    <div class="row">

        @foreach ($product as $item)
        <div class="col-4">
            <div class="card">
                <div style="width:100%; text-align:center">
                <img class="card-img-top" src="{{asset('upload/adImages')}}/{{$item->cover_img}}" alt="Card image cap" style="width: 300px; height: 200px;">
                </div>
               <form action="adsupdate" method="post">
                   @csrf
                    <div class="card-body">
                        <h4 class="card-title">{{$item->name}}</h4>
                        <p class='card-text'>Price:<input type="text" name='newPrice' value="{{$item->price}}"> </p>
                        <p class='card-text'>Quantity:<input type="text" name='newQuantity' value="{{$item->quantity}}"> </p>
                    </div>
                    <div class="card-body">
                        <input type="submit" value="UPDATE" name='update' class="btn btn-primary">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <a href="{{route('adsdestroy',$item->id)}}" class="btn btn-primary">DELETE</a><hr>
                    </div>
                </form>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection
