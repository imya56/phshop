@extends('master')
@section('main_content')
<section class="banner-area hot-offers">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="banner-block mt-0">
                    <a href="{{ url('shop/' . $products[0]['curl'] . '/' . $products[0]['purl']) }}"> <img src="{{ asset('images/' . $products[0]['pimage']) }}" width="727" height="318"  alt="banner collection"> </a>
                    <div class="text-des-container pad-zero">
                        <div class="text-des">
                            <h2>{{$products[0]['ptitle']}}</h2>
                            <p>Lorem Ipsum is simply dummy!</p>
                            <a class="btn btn-primary" href=""><i class="icofont icofont-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
                        <div class="banner-block">
                            <a href="{{url('shop/' . $products[1]['curl'] . '/' . $products[1]['purl'])}}"> <img src="{{ asset('images/' . $products[1]['pimage']) }}" width="348" height="604" alt="banner sunglasses"> </a>
                            <div class="text-des-container">
                                <div class="text-des">
                                    <h2>{{$products[1]['ptitle']}}</h2>
                                    <p>Lorem Ipsum is simply dummy!</p>
                                    <a class="btn btn-primary" href=""><i class="icofont icofont-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block">
                            <a href="{{url('shop/' . $products[2]['curl'] . '/' . $products[2]['purl'])}}"> <img src="{{ asset('images/' . $products[2]['pimage']) }}" width="345" height="471" alt="banner jeans"> </a>
                            <div class="text-des-container pad-zero">
                                <div class="text-des">
                                    <h2>{{$products[2]['ptitle']}}</h2>
                                    <p>Lorem Ipsum is simply dummy!</p>
                                    <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
                        <div class="banner-block">
                            <a href="{{url('shop/' . $products[3]['curl'] . '/' . $products[3]['purl'])}}"> <img src="{{ asset('images/' . $products[3]['pimage']) }}" width="348" height="429"  alt="banner kids"> </a>
                            <div class="text-des-container">
                                <div class="text-des">
                                    <h2>{{$products[3]['ptitle']}}</h2>
                                    <p>Lorem Ipsum is simply dummy!</p>
                                    <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block">
                            <a href="{{url('shop/' . $products[4]['curl'] . '/' . $products[4]['purl'])}}"> <img src="{{asset('images/' . $products[4]['pimage']) }}" width="348" height="198"  alt="banner women"> </a>
                            <div class="text-des-container">
                                <div class="text-des">
                                    <h2>{{$products[4]['ptitle']}}</h2>
                                    <p>Lorem Ipsum is simply dummy!</p>
                                    <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block">
                            <a href="{{url('shop/' . $products[5]['curl'] . '/' . $products[5]['purl'])}}"> <img src="{{ asset('images/' . $products[5]['pimage']) }}" width="348" height="381" alt="banner beauty"> </a>
                            <div class="text-des-container">
                                <div class="text-des">
                                    <h2>{{$products[5]['ptitle']}}</h2>
                                    <p>Lorem Ipsum is simply dummy!</p>
                                    <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                <div class="banner-block mt-0">
                    <a href="{{url('shop/' . $products[6]['curl'] . '/' . $products[6]['purl'])}}"> <img src="{{ asset('images/' . $products[6]['pimage']) }}" width="348" height="428" alt="banner arrival"> </a>
                    <div class="text-des-container">
                        <div class="text-des">
                            <h2>{{$products[6]['ptitle']}}</h2>
                            <p>Lorem Ipsum is simply dummy!</p>
                            <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="banner-block">
                    <a href="{{url('shop/' . $products[7]['curl'] . '/' . $products[7]['purl'])}}"> <img src="{{asset('images/' . $products[7]['pimage']) }}" width="348" height="428" alt="banner watch"> </a>
                    <div class="text-des-container">
                        <div class="text-des">
                            <h2>{{$products[7]['ptitle']}}</h2>
                            <p>Lorem Ipsum is simply dummy!</p>
                            <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="banner-block">
                    <a href="{{url('shop/' . $products[8]['curl'] . '/' . $products[8]['purl'])}}"> <img src="{{asset('images/' . $products[8]['pimage']) }}" width="348" height="475" alt="banner look"> </a>
                    <div class="text-des-container">
                        <div class="text-des">
                            <h2>{{$products[8]['ptitle']}}</h2>
                            <p>Lorem Ipsum is simply dummy!</p>
                            <a class="btn btn-primary" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($sale)
<section class="categories-list">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">
                On Sale Products
            </h5>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="single-categorie">
                    <div class="owl-carousel categories-list-page">
                        @foreach ($sale as $item)
                        <div class="item">
                            <div class="h-100">
                                <div class="product-item">
                                    <span class="badge badge-warning offer-badge">On Sale!</span>
                                    <div class="product-item-image">

                                        <a href="{{ asset('shop/' . $item['curl'] . '/' . $item['purl'] ) }}"><img class="card-img-top img-fluid" src="{{ asset('images/' . $item['pimage']) }}"
                                alt=""></a>
                                    </div>
                                    <div class="product-item-body">
                                        <div class="product-item-action">

                                            @if (Cart::get($item['id']))
                                            <a data-toggle="tooltip" data-placement="top" title="In Cart" class="btn btn-theme-round btn-sm   disabled" data-id="{{$item['id']}}"
                                                href=""><i class="icofont icofont-shopping-cart"></i></a>                                            @else
                                            <a data-toggle="tooltip" data-placement="top" title="Add To Cart" class="btn btn-theme-round btn-sm btn-add-to-cart" data-id="{{$item['id']}}"
                                                href=""><i class="icofont icofont-shopping-cart"></i></a>                                            @endif
                                            <a data-toggle="tooltip" data-placement="top" title="View Detail" class="btn btn-theme-round btn-sm" href=" {{asset('shop/' . $item['curl'] . '/' . $item['purl'] )}} "><i class="icofont icofont-search-alt-2"></i></a>                                            @if (Session::has('user_id')) @if ( in_array($item['id'], $likes) )
                                            <a data-toggle="tooltip" data-placement="top" data-id="{{ $item['id'] }}" class="btn btn-theme-round btn-sm   disabled" href=""
                                                data-original-title="SAVED"><i class="icofont icofont-heart"></i></a>                                            @else
                                            <a data-toggle="tooltip" data-placement="top" data-id="{{ $item['id'] }}" class="btn btn-theme-round btn-sm    save-in-wishlist"
                                                href="" data-original-title="SAVE"><i class="icofont icofont-heart"></i></a>                                            @endif @endif
                                        </div>
                                        <p class="card-title"><a href="{{ asset('shop/' . $item['curl'] . '/' . $item['purl'] ) }}">{{ $item['ptitle'] }}</a></p>

                                        <p>

                                            <span class="product-desc-price"> ${{ $item['price'] }}</span>
                                            <span class="product-price"><b> ${{ $item['new_price'] }}</b></span>
                                        </p>

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
</section>
@endif
@endsection
