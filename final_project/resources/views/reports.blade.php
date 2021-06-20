@extends('layouts.app')

@section('content')
<div class="container col-sm-6">
    <h2 class="" style="text-align: center;">Make a Report</h2><br>

    <form action="sendReport" method="post">
        @csrf


        <div class="form-group">
            <label for=""><kbd>Order_id</kbd></label>
            <input type="text" name="order_id" id="" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label for=""><kbd>Details</kbd></label>
            <textarea id="details" name="details" rows="4" cols="50" class="form-control" required="required"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">send Report</button>
    </form>
</div>
@endsection
