@extends('cms.cms_master')
@section('main_cms_content')

<div class="row">
    <div class="col-12 mt-5">
        <h1 class="h2">Edit Content Form</h1>
        <p class="mt-3"> <a href=" {{ url('cms/content/') }} " class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Back  </a></p>
    </div>
</div>
<div class="row">
    <div class="col-6 m-auto   ">
        <form action=" {{ url('cms/content/' . $item['id']) }} " method="POST" autocomplete="off" novalidate="novalidate">
            @csrf {{method_field('PUT')}}
            <div class="form-group">
                <label for="menu-id">Choose link</label>
                <select name="menu_id" id="menu-id">
                    <option  value=""> Choose menu link...</option>
                    @foreach ($menu as $row)
                <option @if($item['menu_id'] == $row['id'])  selected="selected" @endif value="{{ $row['id'] }}"> {{ $row['link'] }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title"> <span class="text-danger">*</span> Title </label>
                <input type="text" class="form-control" name="title" id="title" value=" {{ $item['title'] }} ">
            </div>
            <div class="form-group">
                <label for="artice"> <span class="text-danger"> * </span> Article </label>
                <textarea name="article" id="article" class="form-control"> {{ $item['article'] }} </textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" name="submit" class="form-control btn btn-primary btn-block">
            </div>
        </form>
    </div>
</div>
@endsection
