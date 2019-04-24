@extends('cms.cms_master')
@section('main_cms_content')
<div class="pt-3 pb-2 my-5 ">
    <h1 class="h1 ">Edit Site Products</h1>

</div>
<div class="row">
    <div class="col-12 mt-5">
        <p><a class="btn btn-primary " href="{{ url('cms/products/create') }}"><i class="fas fa-plus-circle"></i> Add Product</a></p>
        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Product Image</th>
                    <th class="text-center">Updated At</th>
                    <th class="text-center">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>
                        @if ($item['onSale']) <span class="text-danger">On Sale!</span> @endif {{ $item['ptitle']}}

                    </td>
                    <td>

                        <div class="">
                            <div class="">
                                <img width="80" src="{{ asset('images/' .  $item['pimage']) }}"> </div>
                        </div>
                    </td>
                    <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
                    <td>
                        <a class="mr-2" href="{{ url('cms/products/' . $item['id'] . '/edit') }}"><i class="fas fa-pencil-alt"></i> Edit</a>                        |
                        <a class="ml-2" href="{{ url('cms/products/' . $item['id']) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
