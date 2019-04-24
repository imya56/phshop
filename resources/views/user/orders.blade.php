@extends('master')
@section('main_content')
<section class="shopping_cart_page">
    <h6 class="sr-only">validator.w3</h6>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="section-header">
                        <h5 class="heading-design-h5">
                            Order List
                        </h5>
                    </div>
                    <div class="order-list-tabel-main">
                        <table class="datatabel table table-striped table-bordered order-list-tabel table-responsive">
                            <thead>
                                <tr>

                                    <th>Date Purchased</th>
                                    <th> Details </th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                <tr>

                                    <td> {{ date('d/m/Y' , strtotime($item['created_at'])) }} </td>
                                    <td>
                                        <ul class="ml-auto">
                                            @foreach (unserialize($item['data']) as $product)
                                            <li class="text-left">
                                                <img height="50" width="50" src="{{asset('images/' . $product['attributes']['image'])}}" alt="">                                                &nbsp; {{$product['name']}}

                                                <li> @endforeach
                                        </ul>
                                        <br>
                                    </td>
                                    <td> ${{$item['total']}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
