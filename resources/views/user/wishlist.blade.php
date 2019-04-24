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
                            My Wishlist
                        </h5>
                    </div>
                    <div class="row mb-4">

                        @foreach ($likes as $item) @dd($item);
                        <div class="col-lg-4 col-md-6">
                            <div class="h-100">
                                <div class="product-item">
                                    <div class="product-item-image">
                                        <span class="like-icon"><a href="{{url('user/delwishlist?pid=' . $item[0]['id'])}}"> <i class="icofont icofont-close-circled"></i></a></span>
                                        <a href="{{ url('shop/' . $item[0]->curl . '/' . $item[0]->purl) }}"><img class="card-img-top img-fluid" src=" {{asset('images/' . $item[0]->pimage)}} " alt=""></a>
                                    </div>
                                    <div class="product-item-body">

                                        <p class="card-title"><a href="#"> {{$item[0]['ptitle']}}</a></p>
                                        <p>

                                            <span class="product-price">{{ $item[0] -> price }}</span>

                                        </p>
                                        <p>
                                            @if (! Cart::get($item[0] -> id))
                                            <button class="btn btn-theme-round btn-lg btn-add-to-cart" data-id="{{ $item[0]->id }}"> <i class="icofont icofont-shopping-cart"></i> Add To Cart</button>                                            @else
                                            <button class="btn btn-theme-round btn-lg btn-add-to-cart" disabled="disabled"> <i class="icofont icofont-shopping-cart"></i> In Cart</button>                                            @endif </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
