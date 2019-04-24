@extends('master')
@section('main_content')
<!--
*************
pages istory
*************
-->
<div class="osahan-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icofont icofont-ui-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href=" {{ url('shop') }} ">Categories</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst( $products[0]->curl ) }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="products_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row products_page_list">
                    <div class="clearfix"></div>
                    <!--************************************** PRODUCT ***************************** -->
                    @foreach ($products as $product)
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <div class="h-100">
                                <div class="product-item product-item-list">
                                    @if ($product->onSale)
                                    <span class="badge badge-warning offer-badge">On Sale!</span> @endif
                                    <div class="product-item-image">
                                        <a href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}">
                                            <img class="card-img-top img-fluid" src="{{ asset('images') . '/' . $product -> pimage }}" alt="{{ $product->ptitle }} product image">
                                        </a>
                                    </div>
                                    <div class="product-item-body">
                                        <h4 class="card-title"><a href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}">{{$product->ptitle}}</a></h4>
                                        @if ($product -> onSale)
                                        <p>

                                            <span class="product-desc-price"> ${{ $product->price }}</span>
                                            <span class="product-price"><b> ${{ $product->new_price }}</b></span>
                                        </p>
                                        @else
                                        <p class="d-inline">
                                            <span class="product-price"> ${{ $product->price }} </span>
                                        </p>
                                        @endif

                                    </div>

                                    <div class="list-product-item-action">
                                        <a class="btn btn-theme-round mt-5" href="{{url('shop/' . $product->curl . '/' . $product->purl)}}"><i class="icofont icofont-search-alt-2"></i> View details</a>                                        @if(!Cart::get($product->id))

                                        <button class="btn btn-theme-round mt-5  btn-add-to-cart" data-id="{{ $product -> id }}"><i class="icofont icofont-shopping-cart"></i> Add To Cart</button>                                        @else
                                        <button class="btn btn-theme-round mt-5  btn-add-to-cart" data-id="{{ $product -> id }}" disabled="disabled"><i class="icofont icofont-shopping-cart"></i>In Cart</button>                                        @endif @if (Session::has('user_id')) @if (in_Array($product->id, $likes))
                                        <a data-toggle="tooltip" data-placement="top" data-id="{{ $product -> id }}" class="btn btn-danger mt-5  save-in-wishlist disabled"
                                            href="" data-original-title="SAVED"><i class="icofont icofont-heart"></i></a>                                        @else
                                        <a data-toggle="tooltip" data-placement="top" data-id="{{ $product -> id }}" class="btn btn-danger mt-5  save-in-wishlist"
                                            href="" data-original-title="SAVE"><i class="icofont icofont-heart"></i></a>                                        @endif @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--************************************** END PRODUCT ***************************** -->


                </div>
                {{ $products->links() }}
            </div>
        </div>
        </section
@endsection
