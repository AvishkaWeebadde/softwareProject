@extends('layouts.app')

@section('content')


    <div class="container col-sm-6">
        <h2 class="" style="text-align: center;">Delivery Information</h2><br>

        <form action="{{route('orders.store')}}" method="post">
            @csrf


            <div class="form-group">
                <label for=""><kbd>Full Name</kbd></label>
                <input type="text" name="shipping_fullname" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for=""><kbd>Province</kbd></label>
                <input type="text" name="shipping_province" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for=""><kbd>City</kbd></label>
                <input type="text" name="shipping_city" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for=""><kbd>Address</kbd></label>
                <input type="text" name="shipping_address" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for=""><kbd>Mobile</kbd></label>
                <input type="text" name="shipping_phone" id="" class="form-control">
            </div>

            {{--<h4>Payment option</h4>--}}
            <label for=""><kbd>Payment Option</kbd></label>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                    Cash on delivery

                </label>

            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                    Paypal

                </label>

            </div>


            <button type="submit" class="btn btn-primary mt-3">Place Order</button>


        </form>
    </div>

@endsection
