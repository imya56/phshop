@extends('cms.cms_master')
@section('main_cms_content')

<div class="row">
    <div class="col-12 mt-5">
        <h1 class="h2">Edit Menu Form</h1>
        <p class="mt-3"> <a href=" {{ url('cms/menu/') }} " class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Back  </a></p>
    </div>
</div>
<div class="row">
    <div class="col-6 m-auto   ">
        <form action=" {{ url('cms/menu/' . $item['id'] ) }} " method="POST">
            <input type="hidden" name="item_id" value="{{ $item['id'] }}"> @csrf {{ method_field('PUT') }}
            <div class="form-group">
                <label for="link"> <span class="text-danger ">*</span> Link </label>
                <input type="text" class="form-control origin-text" name="link" id="link" value=" {{ $item['link'] }} ">
            </div>
            <div class="form-group">
                <label for="url"> <span class="text-danger">*</span> Url </label>
                <input type="text" class="form-control  target-text" name="url" id="url" value=" {{ $item['url'] }} ">
            </div>
            <div class="form-group">
                <label for="title"> <span class="text-danger">*</span> Title </label>
                <input type="text" class="form-control" name="title" id="title" value=" {{ $item['title'] }} ">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" name="submit" class="form-control btn btn-primary btn-block">
            </div>
        </form>
    </div>
</div>
@endsection
