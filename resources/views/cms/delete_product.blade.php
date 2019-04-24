@extends('cms.cms_master')
@section('main_cms_content')
<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
    <h1 class="h1 ">Are you sure you want to delete this item?</h1>

</div>
<div class="row">
    <div class="col-md-8">
        <form action="{{ url('cms/products/' . $item_id)}}" method="POST" autocomplete="off" novalidate="novalidate">
            @csrf {{ method_field('DELETE') }}
            <input class="btn btn-danger" name="submit" type="submit" value="Delete">
            <a class="btn btn-secondary" href="{{ url('cms/products') }}">Cancel</a>
        </form>
    </div>
</div>
@endsection
