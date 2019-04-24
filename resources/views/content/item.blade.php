@extends('master')
@section('main_content')

<div class="osahan-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icofont icofont-ui-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('shop') }}">Categories</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('shop/' . $product['curl']) }}">{{ucfirst($product['curl'])}}</a></li>
                    <li class="breadcrumb-item active">{{ $product['ptitle'] }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="products_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="shop-detail-left">
                    <div class="item-img-grid">
                        @if ($product['onSale'])
                        <span class="badge badge-warning offer-badge">On Sale!</span> @endif
                        <div id="sync1" class="owl-carousel">
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                        </div>
                        <div id="sync2" class="owl-carousel">
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                            <div class="item"><img alt="" src="{{ asset('/images' . '/' . $product['pimage']) }}" class="img-responsive img-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *********************************** start product ******************************************** -->
            <div class="col-lg-7 col-md-7">
                <div class="shop-detail-right">

                    <div class="widget">
                        <div class="product-name">
                            <p class="text-danger text-uppercase"><i class="icofont icofont-iphone"></i> Mobile</p>
                            <h1>{{ $product['ptitle'] }}</h1>
                            <span>Product code: <b>1919140</b> | Sold by: <strong class="text-info">Gurdeeposahan</strong> ( Supplied By Partner )</span>
                        </div>
                        <div class="price-box">
                            <h5>
                                <span class="product-price text-danger">Special Price <i class="icofont icofont-price"></i> ${{ $product['price'] }}</span>
                            </h5>
                        </div>

                        <div class="short-description">
                            <h4>
                                Quick Overview
                                <span class="pull-right">Availability: <strong class="badge badge-success">In Stock</strong></span>
                            </h4>
                            <p>{!! $product['particle'] !!}</p>
                        </div>
                        <div class="product-color-size-area row">

                        </div>
                        <div class="product-variation">
                            @if (Session::has('user_id')) @if (in_array($product['id'], $likes ))
                            <button type="button" class="btn btn-secondary disabled btn-lg save-in-wishlist " disabled="disabled" data-id="{{ $product['id'] }}"><i class="icofont icofont-heart"></i> Added To Wishlist</button>                            @else
                            <button type="button" class="btn btn-outline-success btn-lg save-in-wishlist " data-id="{{ $product['id'] }}"><i class="icofont icofont-heart"></i> Add To Wishlist</button>                            @endif @endif @if (! Cart::get($product['id']))
                            <button class="btn btn-theme-round btn-lg btn-add-to-cart" data-id="{{ $product['id'] }}"> <i class="icofont icofont-shopping-cart"></i> Add To Cart</button>                            @else
                            <button class="btn btn-theme-round btn-lg btn-add-to-cart" disabled="disabled"> <i class="icofont icofont-shopping-cart"></i> In Cart</button>                            @endif
                            <a href="{{ url('shop/checkout') }}" class="btn btn-theme-round btn-lg"> <i class="icofont icofont-shopping-cart"></i> Check out</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *********************************** end product ******************************************** -->
        </div>
    </div>
</section>
<section class="deals-of-the-day">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">
                Related Products
            </h5>
        </div>
        <div class="row">
            @foreach ($other_products as $other_product)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="h-100">
                    <div class="product-item">
                        @if ($other_product['onSale'])
                        <span class="badge badge-warning offer-badge">On Sale!</span> @endif
                        <div class="product-item-image">
                            <a href="{{ asset('shop/' . $other_product['curl'] . '/' . $other_product['purl'] ) }}"><img class="card-img-top img-fluid " src="{{
                                asset( 'images/' . $other_product[ 'pimage']) }} " alt=" "></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-action">
                                <a data-id="{{$other_product['id']}}" @if((! Cart::get($product[ 'id']))) title="Add to cart" @else title="in cart" @endif
                                    class="btn btn-add-to-cart btn-theme-round btn-sm" href=""><i class="icofont btn-add-to-cart icofont-shopping-cart "></i></a>
                                <a data-toggle="tooltip " data-placement="top " title="View details" class="btn btn-theme-round btn-sm" href=""><i class="icofont icofont-search-alt-2 "></i></a>                                @if(Session::has('user_id')) @if (in_array($product['id'], $likes ))
                                <a data-toggle="tooltip" data-placement="top" disabled="disabled" class="btn disabled btn-theme-round btn-sm save-in-wishlist"
                                    href=""><i class="icofont icofont-heart"></i></a> @else
                                <a data-toggle="tooltip" data-placement="top" data-id="{{$other_product['id']}}" class="btn btn-theme-round btn-sm save-in-wishlist"
                                    href="" title="Save"><i class="icofont icofont-heart"></i></a>                                @endif @endif
                            </div>
                            <p class="card-title ">{{ $other_product['ptitle']}}</p>
                            @if ($other_product['onSale'])
                            <p>
                                <span class="product-desc-price "> ${{$other_product['price']}}</span>
                                <span class="product-price "> ${{$other_product['new_price']}}</span>
                            </p>
                            @else
                            <p>
                                <span class="product-price "> ${{$other_product['price'] }}</span>
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection
