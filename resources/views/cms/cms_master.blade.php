<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>phShop | Admin Panel</title>
    @include('inc.css_header')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <style>
        ul,
        li,
        select,
        option,
        label {
            text-align: left;
        }
    </style>
</head>

<body>



    <nav class="navbar navbar-dark  fixed-top bg-dark flex-md-nowrap pr-5 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ asset('cms/dashboard') }}">phShop Admin Panel</a>

        <ul class=" nav  ">
            <li class="nav-item  ">
                <a class="nav-link text-white" target="_blank" href="{{ url('') }}">Back To Site</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link text-white" href="{{ url('user/logout') }}">Logout</a>
            </li>
        </ul>

    </nav>



    <div class="container-fluid">
        <div class="row">
            <nav class="col-2   d-md-block    bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/dashboard') }}">
                                    Dashboard
                             </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/menu') }}">
                                    Menu
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/content') }}">
                                    Content
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/categories') }}">
                                    Categories
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/products') }}">
                                    Products
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/orders') }}">
                                    Orders
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/users') }}">
                                    Users
                             </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cms/home-products') }}">
                                    Home Page Products
                             </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <main class="col-9 ml-sm-auto col-lg-10 px-3">
    @include('inc.error_mess'); @yield('main_cms_content')

            </main>
        </div>
    </div>

    @include('inc.js_footer')
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    <script>
        $('#article').summernote({
             height: 300
            });
    </script>
</body>

</html>
