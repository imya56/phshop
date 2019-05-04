@extends('cms.cms_master')
@section('main_cms_content')
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-5 pt-3 pb-2 mb-3 ">
    <h1 class="h1 ">Add Product Form</h1>

</div>
<div class="row my-5">
    <div class="col-6 text-left">
        <p><a href="{{ url('cms/products') }}"><i class="fas fa-arrow-circle-left btn btn-primary " style="margin-left: 900px"> Back</i> </a></p>
        <form action="{{ url('cms/products')}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
            @csrf
            <div class="form-group">
                <label for="categorie-id"><span class="text-danger">*</span>Category</label>
                <select class="form-control" name="categorie_id" id="categorie-id">
          <option value="">Choose Category...</option>
          @foreach ($categories as $item)
        <option @if( old('categorie_id') == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['ctitle'] }}</option>
          @endforeach
        </select>
            </div>
            <div class="form-group">
                <label for="title"><span class="text-danger">*</span>Title</label>
                <input value="{{ old('title') }}" class="form-control origin-text" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="url"><span class="text-danger">*</span>Url</label>
                <input value="{{ old('url') }}" class="form-control target-text" type="text" name="url" id="url">
            </div>
            <div class="form-group">
                <label for="price"><span class="text-danger">*</span>Price</label>
                <input value="{{ old('price') }}" class="form-control " type="text" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="article"><span class="text-danger">*</span> Article</label>
                <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
            </div>
            <div class="form-group">
                <span class="mr-3 float-left"> Category Image:  </span>
                <label class="custom-file" for="cat-img">
                        <input type="file" name="image" id="cat-img" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
            </div>
            <label for="sale"> <input type="checkbox" name="sale" id="sale" value="1"> On Sale</label>
            <div class="price-on-sale d-none">
                <div class="form-group">
                    <label for="old-price">Old price:</label>
                    <input type="text" name="old_price" id="old-price" value="{{ old('old_price') ?? 0 }}" size="2">
                </div>
                <div class="form-group">
                    <label for="new-price">New price:</label>
                    <input type="text" name="new_price" id="new-price" value="{{ old('new_price') ?? 0 }}" size="2">
                </div>
            </div>


            <input type="submit" value="Save" name="submit" class="btn btn-primary btn-block mt-5">
        </form>
    </div>
</div>
@endsection
