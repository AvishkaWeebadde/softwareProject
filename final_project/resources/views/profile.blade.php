@extends('layouts.app')

@section('content')
<div class="col-md-10">
    <h1>MY POSTS <a href="" class="btn btn-primary">create an Ad</a><hr></h1>
    <div class="row">

        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('sample.jpeg')}}" alt="Card image cap" style="max-height: 100%; max-width:100%">
                    <div class="card-body">
                        <h4 class="card-title">title</h4>
                        <p class='card-text'>Price:<input type="text" name='newPrice' value=""> <a href="" class="btn btn-primary">update</a></p>
                        <p class='card-text'>Quantity:<input type="text" name='newPrice' value=""> <a href="" class="btn btn-primary">update</a></p>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">create an Ad</a><hr>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection
