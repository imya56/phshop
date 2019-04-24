@extends('cms.cms_master')
@section('main_cms_content')

<div class="row">
    <div class="col-12 mt-5">
        <h1 class="h2">Add Category Form</h1>
        <p class="mt-3"> <a href=" {{ url('cms/categories/') }} " class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Back  </a></p>
    </div>
</div>
<div class="row">
    <div class="col-6 m-auto   ">
        <form action=" {{ url('cms/categories') }} " enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="title"> <span class="text-danger ">*</span> Title </label>
                <input type="text" class="form-control origin-text" name="title" id="title" value=" {{ old('title') }} ">
            </div>
            <div class="form-group">
                <label for="url"> <span class="text-danger">*</span> Url </label>
                <input type="text" class="form-control  target-text" name="url" id="url" value=" {{ old('url') }} ">
            </div>
            <div class="form-group">
                <label for="article"> <span class="text-danger"> * </span> Article </label>
                <textarea name="article" id="article" class="form-control"> {{ old('article') }} </textarea>
            </div>
            <div class="form-group">
                <span class="mr-3 float-left"> Category Image:  </span>
                <label class="custom-file" for="cat-img">
                    <input type="file" name="image" id="cat-img" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" name="submit" class="form-control btn btn-primary btn-block">
            </div>
        </form>
    </div>
</div>
@endsection
