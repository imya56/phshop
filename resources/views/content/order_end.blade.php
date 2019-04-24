@extends('master')
@section('main_content')
<section class="shopping_cart_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="checkout-step mb-40">
                    <ul>
                        <li>
                            <a href="cart_delivery.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">1</div>
                                </div>
                                <span>Shipping</span>
                            </a>
                        </li>
                        <li>
                            <a href="cart_order.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">2</div>
                                </div>
                                <span>Order Overview</span>
                            </a>
                        </li>
                        <li>
                            <a href="cart_checkout.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">3</div>
                                </div>
                                <span>Payment</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="cart_done.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">4</div>
                                </div>
                                <span>Order Complete</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 mx-auto">
                <div class="widget">
                    <div class="order-detail-form text-center">
                        <div class="col-lg-10 col-md-10 mx-auto order-done">
                            <i class="icofont icofont-check-circled"></i>
                            <h2 class="text-success">Congrats! Your Order has been Accepted..</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis.
                                Etiam euismod ornare elementum. Sed ex est, Sed ex est, consectetur eget consectetur, Lorem
                                ipsum dolor sit amet...
                            </p>
                        </div>
                        <div class="cart_navigation text-center">
                            <a href="{{ url('shop') }}" class="btn btn-theme-round">Return to store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
