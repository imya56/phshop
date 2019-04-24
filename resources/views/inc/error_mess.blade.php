@if (isset($errors_top)) @if ($errors_top && $errors->any())
<div class="container mt-5">
    <div class="row">
        <div class="col-6 m-auto text-left">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="error-li"> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif @endif
