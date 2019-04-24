@extends('master')
@section('main_content')
<section class="login_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="widget">
                    <div class="login-modal-right">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="register" role="tabpanel">
                                <h5 class="heading-design-h5">Register Now!</h5>
                                <form action="" novalidate="novalidate" autocomplete="off" method="POST" class="text-left">
                                    @csrf
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="name"> <span class="text-danger">* </span> First Name:</label>
                                                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control" placeholder="My first name">
                                                <span class="text-danger"> {{ $errors -> first('name') }}</span>
                                            </div>
                                            <div class="col-6">
                                                <label for="last_name"> <span class="text-danger">* </span> Last Name:</label>
                                                <input type="text" value="{{old('last_name')}}" name="last_name" id="last_name" class="form-control" placeholder="My last name">
                                                <span class="text-danger"> {{ $errors -> first('last_name') }}</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="email"> <span class="text-danger">* </span> Enter Email: </label>
                                        <input type="email" value="{{old('email')}}" id="email" name="email" class="form-control" placeholder="myemail@gmail.com ">
                                        <span class="text-danger">  {{ $errors -> first('email') }}</span>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="password"> <span class="text-danger">* </span> Enter Password: </label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="********">
                                        <span class="text-danger"> {{ $errors -> first('password') }}</span>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <button type="submit" class="btn btn-lg btn-theme-round btn-block">Create Your Account</button>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="text-center login-footer-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('user/signin')}}"><i class="icofont icofont-lock"></i> LOGIN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('user/signup')}}"><i class="icofont icofont-pencil-alt-5"></i> REGISTER</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
