@extends('cms.cms_master')
@section('main_cms_content')
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
    <h1 class="h1 ">Add Product Form</h1>

</div>
<div class="row my-5">
    <div class="col-6 text-left">
        <p><a href="{{ url('cms/home-products') }}"><i class="fas fa-arrow-circle-left btn btn-primary " style="margin-left: 900px"> Back</i> </a></p>
        <form action="{{ url('cms/home-products')}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
            @csrf
            <div class="form-group">
                <label for="id"><span class="text-danger">*</span>Product</label>
                <select class="form-control" name="id" id="id">
          <option value="">Choose product...</option>
          @foreach ($products as $item)
        <option  value="{{ $item['id'] }}">{{ $item['ptitle'] }}</option>
          @endforeach
        </select>
            </div>
            <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" name="position" id="sel1">
                @for($x = 1; $x<=9;$x++)
                    <option value="{{$x}}"> {{$x}}
                 @endfor 
                </select>
            </div>
            <input type="submit" value="Save" name="submit" class="btn btn-primary btn-block mt-5">
        </form>
    </div>
</div>
@endsection
           <div class=""> 
                <label for="index"> Product position <label>
                <select>
                 @for($x = 1; $x<=9;$x++)
                    <option value="{{$x}}"> {{$x}}
                 @endfor
                </select>
            </div>
           