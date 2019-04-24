@extends('master')
@section('main_content')

<section class=" ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 block-404 text-center">
                <h1><img src="{{ asset('template/images/404.png') }}" alt="404"></h1>
                <h2>Sorry! Page not found.</h2>
                <h4>Unfortunately the page you are looking for has been moved or deleted.</h4>
                <div class="center-holder">
                    <a href="index.html" class="btn btn-secondary btn-lg"><i class="icofont icofont-ui-home"></i> GO TO HOME PAGE</a>
                </div>
            </div>
        </div>




    </div>
</section>
@endsection
