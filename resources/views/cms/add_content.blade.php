@extends('cms.cms_master')
@section('main_cms_content')

<div class="row">
    <div class="col-12 mt-5">
        <h1 class="h2">Add Content Form</h1>
        <p class="mt-3"> <a href=" {{ url('cms/content/') }} " class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Back  </a></p>
    </div>
</div>
<div class="row">
    <div class="col-6 m-auto   ">
        <form action=" {{ url('cms/content') }} " method="POST" autocomplete="off" novalidate="novalidate">
            @csrf
            <div class="form-group">
                <label for="menu-id">Choose link</label>
                <select name="menu_id" id="menu-id">
                    <option  value=""> Choose menu link...</option>
                    @foreach ($menu as $item)
                <option @if(old('menu_id') == $item['id']) checked="checked" @endif  class="select2-selection__rendered" value="{{ $item['id'] }}"> {{ $item['link'] }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title"> <span class="text-danger">*</span> Title </label>
                <input type="text" class="form-control" name="title" id="title" value=" {{ old('title') }} ">
            </div>
            <div class="form-group">
                <label for="artice"> <span class="text-danger"> * </span> Article </label>
                <textarea name="article" id="article" class="form-control"> {{ old('article') }} </textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" name="submit" class="form-control btn btn-primary btn-block">
            </div>
        </form>
    </div>
</div>
@endsection
