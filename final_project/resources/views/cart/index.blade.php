@extends('layouts.app')

@section('content')

    <h2>Your cart</h2>
    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)

            <tr>
            <td scope="row">{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td><input type="number" value="{{$item->quantity}}" id=""></td>
            <td><a href="{{ route('cart.destroy', $item->id) }}">Remove</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

@endsection
