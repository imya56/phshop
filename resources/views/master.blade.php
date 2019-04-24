<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Phshop Mobile - mobile phones shop">
    <meta name="keywords" content="apple, samsung, phome, mobile, tablet, tablets">
    <meta name="author" content="imya56">
    <title>@if (!empty($pageTitle)) {{$pageTitle}} @endif
    </title>
    @include('inc.css_header')
    <script>
        var BASE_URL = "{{ url('') }}/";
    </script>
</head>

<body>

    <header>

        <div class="navbar-top navbar-top-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 text-left">
                        <p>
                            SALE - Get Min <strong><span class="text-warning">40-80%</span> </strong>off!
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><i class="icofont icofont-iphone"></i> +972 547583548</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="icofont icofont-headphone-alt"></i> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @include('inc.top_menu')
        <nav class="navbar navbar-expand-lg navbar-light bg-light osahan-menu osahan-menu-3 pad-none-mobile">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown mega-dropdown-main active">
                            <a class="nav-link" href="{{url('/')}}">
                               <i class="icofont icofont-ui-home"></i> Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('shop')}}">Shop</a>
                        </li>
                        @if (isset($menu)) @foreach ($menu as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url($item['url'])}}">{{$item['link']}}</a>
                        </li>
                        @endforeach @endif
                    </ul>
                    <span class="navbar-text"> Worlds's Fastest <b class="text-primary">Online Shopping</b> Destination</span>
                </div>
            </div>
        </nav>

    </header>
    <!-- ########################################################-->
    <!-- end header-->
    @include('inc.error_mess') @yield('main_content')


    <!-- footer########################################################################### -->
    <footer>
        <section class="footer-Content">
            <div class="container m-auto">
                <div class="row">

                    @if (isset($categories)) @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center m-auto">
                        <div class="footer-widget">
                            <h3 class="block-title"><a href="{{ url('shop/' . $item['curl']) }}" class="text-light">{{ $item['ctitle'] }}</a></h3>
                            <p>{{$item['carticle']}}</p>
                        </div>
                    </div>
                    @endforeach @endif
                </div>
            </div>
        </section>
    </footer>
    <section class="services-block services-block-footer">
        <h6 class="sr-only">Services List</h6>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icofont icofont-free-delivery text-primary"></i></div>
                        <div class="text"><span class="text-uppercase">Free shipping &amp; return</span><small>Free Shipping over
                $300</small></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icofont icofont-money-bag text-primary"></i></div>
                        <div class="text"><span class="text-uppercase">Money back guarantee</span><small>30 Days Money Back</small></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icofont icofont-headphone-alt-2 text-primary"></i></div>
                        <div class="text"><span class="text-uppercase">020-800-456-747</span><small>24/7 Available Support</small></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="item d-flex align-items-center">
                        <div class="icon"><i class="icofont icofont-shield text-primary"></i></div>
                        <div class="text"><span class="text-uppercase">Secure Payment</span><small>Secure Payment</small></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <h6 class="sr-only">Services List</h6>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 m-auto">
                    <div class="footer-logo pull-left hidden-xs">
                        <img alt="" src="{{ asset('template/images/logo-white.png') }}" class="img-responsive">
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('shop')}}">Shop</a></li>
                            @if (isset($menu)) @foreach ($menu as $item)
                            <li><a href="{{ url( $item['url']) }}">{{$item['title']}}</a></li>
                            @endforeach @endif
                        </ul>
                    </div>
                    <div class="copyright">
                        <p> PhShop &copy; imya56 | {{Date('Y')}} &nbsp; Designed with <i class="fa fa-heart"></i> by
                            <a target="_blank" href="https://www.facebook.com/iamgurdeeposahan">
                <strong>Osahan Studio</strong>
              </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bootstrap Core JavaScript -->
    @include('inc.js_footer')

</body>

</html>
