@extends('cms.cms_master')
@section('main_cms_content')
<div class="pt-3 pb-2 my-5 ">
    <h1 class="h1 ">Edit Home Page Products</h1>

</div>
<div class="row">
    <div class="col-12 mt-5">
        <p><a class="btn btn-primary " href="{{ url('cms/home-products/create') }}"><i class="fas fa-plus-circle"></i> Add Product</a></p>
        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th class="text-center">Index</th>
                    <th class="text-center">Product Image</th>
                    <th class="text-center">Product title</th>
                    <th class="text-center">Operation</th>
                </tr> 
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>
                        {{$item['product_place']}}
                    </td>
                    <td>

                        <div class="">
                            <div class="">
                                <img width="80" src="{{ asset('images/' .  $item['pimage']) }}"> </div>
                        </div>
                    </td>
                    <td> {{$item['ptitle']}} </td>
                    <td>
                       <a class="mr-2" href="{{ url('cms/home-products/' . $item['id'] . '/edit') }}"><i class="fas fa-pencil-alt"></i> Edit</a>                        
                       <a class="ml-2" href="{{ url('cms/home-products/' . $item['id']) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
