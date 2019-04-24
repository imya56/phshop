<nav class="navbar navbar-light navbar-expand-lg bg-primary bg-faded osahan-menu osahan-menu-top-3">
    <div class="container  ml-3 mr-0">

        <a class="navbar-brand text-white" href="{{url('/')}}"> Phone Shop <img src="{{ asset('template/images/logo-white.svg') }}" alt="logo">
</a>
        <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
        <div class="navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto top-categories-search-main">
                <div class="top-categories-search">
                    <div class="input-group">
                        <!--  ****************************************************   -->

                        <form action="" method="GET">
                            <span class="input-group-btn categories-dropdown">
            @if(isset($categories))
            <select class="form-control select-cat" name="cat">

                    <option >All Categories</option>
                            @foreach ($categories as $item)
                            <option @if($item['ctitle'] == $cat ) selected="selected"  @endif   value="{{ $item['ctitle'] }}">{{ $item['ctitle'] }}</option>

                            @endforeach
                            <optgroup label="iOS">
                            <option value="5">Apple </option>
                            </optgroup>
                </select>
                @endif
                  </span>
                            <input type="submit" value="" class="d-none select-cat-submit">
                        </form>
                        <!--  ****************************************************   -->

                        <input class="form-control" placeholder="Search products & brands" aria-label="Search products & brands" type="text" name="search-product"
                            id="search-product">
                    </div>
                </div>
            </div>
            <div class="my-2 my-lg-0">
                <ul class="list-inline main-nav-right">
                    <li class="list-inline-item dropdown osahan-top-dropdown">
                        <a class="btn btn-light" href="{{ url('shop/checkout') }}">
                            <i class="icofont icofont-shopping-cart"></i> Cart @if (!Cart::isEmpty())
                            <small class="cart-value">{{ Cart::getTotalQuantity() }}</small>
                            @endif
                            </a>

                    </li>
                    <li class="list-inline-item">
                        @if (Session::has('user_id'))
                        <li class="list-inline-item dropdown osahan-top-dropdown">
                            <a class="btn btn-outline-light dropdown-toggle dropdown-toggle dropdown-toggle-top-user" href="" data-toggle="dropdown">
                        <img src=" {{ asset('template/images/user-ava.jpg') }} " alt="user profile image">  {{ Session::get('user_name') }}
                        </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-list-design">
                                <a class="dropdown-item" href="{{ url('user/wishlist') }}"><i class="icofont icofont-heart-alt"></i> Wish List  </a>
                                <a class="dropdown-item" href="{{ url('user/my-orders') }}"><i class="icofont icofont-list fa-fw"></i> Order list  </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('user/logout')}}"><i class="icofont icofont-logout"></i> Logout</a>
                            </div>
                        </li> @else
                        <a class="btn btn-light" href="{{url('user/signin')}}"><i class="icofont icofont-ui-user"></i> Login </a>                        @endif
                    </li>

                </ul>
            </div>
        </div>
    </div>
    @if(Session::has('is_admin'))
    <a class="btn btn-light" href=" {{ url('cms/dashboard') }} "> admin panel </a> @endif

</nav>
