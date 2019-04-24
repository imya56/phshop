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
                            <div class="tab-pane active" id="login" role="tabpanel">
                                <h5 class="heading-design-h5">Login to your account</h5>
                                <form action="" novalidate="novalidate" autocomplete="off" method="post">
                                    @csrf
                                    <fieldset class="form-group">
                                        <label for="email">Enter Emial</label>
                                        <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="email@gmail.com">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>Enter Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="********">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="submit" name="submit" value="ENTER TO YOUR ACCOUNT" class="btn btn-lg btn-theme-round btn-block">                                        @if (isset($authError))
                                        <span class="text-danger"> {{ $authError }} </span> @endif
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="text-center login-footer-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('user/signin') }}"><i class="icofont icofont-lock"></i> LOGIN</a>
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
