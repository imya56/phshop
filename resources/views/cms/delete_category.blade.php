@extends('cms.cms_master')
@section('main_cms_content')

<div class="row">
    <div class="col-12 mt-5">
        <h1 class="h3">Are you sure you want to delete this Category?</h1>
    </div>
</div>
<div class="row">
    <div class="col-6 m-auto   ">
        <form action=" {{ url('cms/categories/' . $item_id) }} " method="POST">
            @csrf {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger mr-2" name="submit" value="Delete">
            <a href="{{ url('cms/categories') }}" class="btn btn-secondary"> Cancel </a>
        </form>
    </div>
</div>
@endsection
