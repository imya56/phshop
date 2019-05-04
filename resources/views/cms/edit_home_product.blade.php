@extends('cms.cms_master')
@section('main_cms_content')
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-5 pt-3 pb-2 mb-3 ">
    <h1 class="h1 ">Edit Home Page  Product Form</h1>
</div>
<div class="row my-5">
    <div class="col-6 text-left">
        <p><a href="{{ url('cms/home-products') }}"><i   class="fas fa-arrow-circle-left btn btn-primary "> Back</i> </a></p>
        <form action="{{ url('cms/home-products')}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
            @csrf
            <div class="form-group">
                <label for="id"><span class="text-danger">*</span>Product</label>
                <select class="form-control" name="id" id="id">
           @foreach ($products as $item)
        <option @if($item['id']==$homeProd['product_id']) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['ptitle'] }}</option>
          @endforeach
        </select>
            </div>
            <div class="form-group">
                <label for="sel1"> Product place:</label>
                <select disabled="disabled" class="form-control" name="position" id="sel1">
                @for($x = 1; $x<=9;$x++)
                    <option @if($x == $homeProd['product_place']) selected="selected" @endif value="{{$x}}"> {{$x}}
                 @endfor 
                </select>
            </div>
            <input type="submit" value="Save" name="submit" class="btn btn-primary btn-block mt-5">
        </form>
    </div>
</div>
@endsection
