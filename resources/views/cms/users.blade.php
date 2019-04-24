@extends('cms.cms_master')
@section('main_cms_content')
<div class="pt-3 pb-2 my-5 ">
    <h1 class="h1">Edit Users</h1>

</div>
<div class="row">
    <div class="col-12 mt-5">
        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th class="text-center">#No.</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $i => $item)
                <tr>
                    <td>
                        {{++$i}}
                    </td>

                    <td>{{ $item -> name }}</td>
                    <td>
                        {{$item -> email}}
                    </td>

                    @if ($item -> role_id === 7)
                    <td>
                        <span> Active user </span>
                    </td>
                    <td>
                        <a href="{{ url('cms/users/' . $item -> id . '/edit?r=add') }}" class="edit-user-roles"><i class="fas fa-pencil-alt"></i> Add admin roles</a>                        |
                        <a class="ml-2" href="{{ url('cms/users/' . $item -> id) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                    @else
                    <td>
                        <a> Admin
                    </td>
                    <td>
                        <a href="{{ url('cms/users/' . $item -> id . '/edit?r=del') }}" class="edit-user-roles"><i class="fas fa-pencil-alt"></i> Delete admin roles </a>                        |
                        <a class="ml-2" href="{{ url('cms/users/' . $item -> id) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                    @endif

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
