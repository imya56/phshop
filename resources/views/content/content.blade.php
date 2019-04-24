@extends('master')
@section('main_content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @foreach ($content as $item)
            <h3>{{$item -> title}}</h3>
            <p>
                {!! $item -> article !!}
            </p>
            @endforeach
        </div>
    </div>
</div>
@endsection
