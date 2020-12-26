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
            <td>
                {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
            </td>
            <td>
                <form action="{{ route('cart.update', $item->id)}}">
                    <input name="quantity" type="number" value="{{$item->quantity}}" id="">
                    <input type="submit" value="Save">
                </form>
            </td>
            <td><a href="{{ route('cart.destroy', $item->id) }}">Remove</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <h4>
       Your Total : ${{Cart::session(auth()->id())->getTotal()}}
    </h4>

    <a name="" id="" class="btn btn-primary" href="{{route('cart.checkout')}}" role="button">Proceed to checkout</a>

@endsection
