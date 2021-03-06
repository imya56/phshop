@extends('cms.cms_master')
@section('main_cms_content')

<div class="row">
    <div class="col-12 mt-5">
        <h1 class="h2">Edit Site Content</h1>
        <p class="mt-3"> <a href=" {{ url('cms/content/create') }} " class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Site Content </a></p>

        <div class="row  text-center">
            <div class="col-12 text-center">
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th class="text-center"> Title </th>
                            <th class="text-center">Updated At</th>
                            <th class="text-center"> Operation </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($content as $item)
                        <tr>
                            <td> {{$item['title']}} </td>
                            <td>{{ date('d/m/Y', strtotime( $item['updated_at'])) }}</td>
                            <td>
                                <a href=" {{ url('cms/content/' . $item['id'] . '/edit') }} " class="mr-2"> <i class="fas fa-pencil-alt"></i> Edit  </a>                                |
                                <a href=" {{ url('cms/content/' . $item['id']) }} " class="ml-2"> <i class="fas fa-trash-alt"></i> Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
