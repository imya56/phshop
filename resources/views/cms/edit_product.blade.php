@extends('cms.cms_master')
@section('main_cms_content')
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
    <h1 class="h1 ">Edit Product Form</h1>

</div>
<div class="row my-5">
    <div class="col-6 text-left">
        <p><a href="{{ url('cms/products') }}"><i   class="fas fa-arrow-circle-left btn btn-primary "> Back</i> </a></p>
        <form action="{{ url('cms/products/' . $item['id'])}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
            <input type="hidden" name="item_id" value="{{ $item['id'] }}"> @csrf {{ method_field('PUT') }}
            <div class="form-group">
                <label for="categorie-id"><span class="text-danger">*</span>Category</label>
                <select class="form-control" name="categorie_id" id="categorie-id">

          @foreach ($categories as $row)
        <option @if( $item['categorie_id'] == $row['id'] ) selected="selected" @endif value="{{ $row['id'] }}">{{ $row['ctitle'] }}</option>
          @endforeach
        </select>
            </div>
            <div class="form-group">
                <label for="title"><span class="text-danger">*</span>Title</label>
                <input value="{{ $item['ptitle'] }}" class="form-control origin-text" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="url"><span class="text-danger">*</span>Url</label>
                <input value="{{ $item['purl'] }}" class="form-control target-text" type="text" name="url" id="url">
            </div>
            <div class="form-group">
                <label for="price"><span class="text-danger">*</span>Price</label>
                <input value="{{ $item['price'] }}" class="form-control " type="text" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="article"><span class="text-danger">*</span> Article</label>
                <textarea name="article" id="article" class="form-control">{{ $item['particle'] }}</textarea>
            </div>
            <div class="form-group">
                <span class="mr-3 float-left"> Category Image:  </span>
                <label class="custom-file" for="cat-img">
                        <input type="file" name="image" id="cat-img" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
            </div>
            <input @if($item[ 'onSale']) checked="checked" @endif type="checkbox" name="sale" id="sale" value="1"> On Sale
            <div class="price-on-sale">
                <div class="form-group">
                    <label for="old-price">Old price:</label>
                    <input type="text" name="old_price" id="old-price" class="" value="{{ $item['price'] }}" size="2">
                </div>
                <div class="form-group">
                    <label for="new-price">new price:</label>
                    <input type="text" name="new_price" id="new-price" value="{{ $item['new_price'] }}" size="2">
                </div>
            </div>
            <input type="submit" value="Update" name="submit" class="btn btn-primary btn-block mt-5">
        </form>
    </div>
</div>
@endsection
