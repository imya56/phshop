@extends('master')
@section('main_content')
<section class="category-page">
    <div class="container">
        <div class="row">
            @foreach ($categories as $categorie)
            <div class="col-lg-4 col-md-4 col-sm-4 categorie">
                <div class="widget">
                    <div class="categories-page-image ">
                        <a href=" {{ url('shop/' . $categorie['curl'])}}"><img class="img-fluid " src="{{ asset( 'images/' . $categorie[ 'cimage']) }}" alt="category image for {{$categorie['ctitle']}}" style="height:250px; "></a>
                    </div>
                    <div class="widget-header ">
                        <small>98,156 Items</small>
                        <a href=" {{ url('shop/' . $categorie['curl'])}}">
                            <h1><i class="icofont icofont-brand-android-robot "></i> {{ $categorie['ctitle'] }}</h1>
                        </a>
                    </div>
                    <p>{!! $categorie['carticle'] !!}</p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
