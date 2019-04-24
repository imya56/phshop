@extends('cms.cms_master')
@section('main_cms_content')
<div class="pt-3 pb-2 my-5 ">
    <h1 class="h1">View user's orders</h1>

</div>
<div class="row">
    <div class="col-11 mt-5">
        <table class="table table-striped  my-5">
            <thead>
                <tr>
                    <th class="text-center">User</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Details</th>
                    <th class="text-center">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->total }} </td>
                    <td>
                        <ul>
                            @foreach(unserialize($item->data) as $order)
                            <li>{{ $order['name'] }}, price item: ${{ $order['price'] }}, Quantity: {{ $order['quantity'] }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
