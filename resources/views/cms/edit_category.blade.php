@extends('cms.cms_master')
@section('main_cms_content')
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
    <h1 class="h1 ">Edit Category Form</h1>

</div>
<div class="row my-5">
    <div class="col-7 m-auto   ">
        <p><a href="{{ url('cms/categories') }}"><i style="margin-left: 900px" class="fas fa-arrow-circle-left btn btn-primary "> Back</i> </a></p>
        <form action="{{ url('cms/categories/' . $item['id'])}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
            <input type="hidden" name="item_id" value="{{ $item['id'] }}"> @csrf {{ method_field('PUT') }}
            <div class="form-group">
                <label for="title"><span class="text-danger">*</span>Title</label>
                <input value="{{ $item['ctitle'] }}" class="form-control origin-text" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="url"><span class="text-danger">*</span>Url</label>
                <input value="{{ $item['curl'] }}" class="form-control target-text" type="text" name="url" id="url">
            </div>
            <div class="form-group">
                <label for="article"><span class="text-danger">*</span> Article</label>
                <textarea name="article" id="article" class="form-control">{{ $item['carticle'] }}</textarea>
            </div>

            <div class="form-group">
                <span class="mr-3 float-left"> Category Image:  </span>
                <label class="custom-file" for="cat-img">
                    <input type="file" name="image" id="cat-img" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>
            </div>
            <input type="submit" value="Update" name="submit" class="btn btn-primary btn-block mt-5">
        </form>
    </div>
</div>
@endsection
