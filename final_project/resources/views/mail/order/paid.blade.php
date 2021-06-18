@component('mail::message')
# Purchase Successful - Eletromerce

Thank you for the purchase

<table class="table">
    <thead>
        <tr><th>Order id</th>
            <th>Product name</th>
            <th>Product name</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td scope="row">{{ $item->name }}</td>
            <td>{{ $item->pivot->quantity }}</td>
            <td>{{ $item->pivot->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
Order ID :{{$order->order_number}} <br>
Total    : {{$order->grand_total}}

@component('mail::button', ['url' => ''])
Contact us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
