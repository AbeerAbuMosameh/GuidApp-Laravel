<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{asset('Back/assets/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">


    <link href={{asset('Back/assets/img/favicon.png')}} rel="icon">
    <link href={{asset('Back/assets/img/apple-touch-icon.png')}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href={{asset('Back/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href={{asset('Back/assets/vendor/bootstrap-icons/bootstrap-icons.css')}} rel="stylesheet">
    <link href={{asset('Back/assets/vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
    <link href={{asset('Back/assets/vendor/quill/quill.snow.css')}} rel="stylesheet">
    <link href={{asset('Back/assets/vendor/quill/quill.bubble.css')}} rel="stylesheet">
    <link href={{asset('Back/assets/vendor/remixicon/remixicon.css')}} rel="stylesheet">
    <link href={{asset('Back/assets/vendor/simple-datatables/style.css')}} rel="stylesheet">
@stack('css')
<!-- Template Main CSS File -->
    <link href={{asset('Back/assets/css/style.css')}} rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


    <style>
        svg.w-5.h-5 {
            width: 10px !important;
        }

        button.close {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none;
        }

        .close {
            display: inline-block;
            margin-top: 0;
            margin-right: 0;
            width: 9px;
            height: 9px;
            background-repeat: no-repeat !important;
            text-indent: -10000px;
            outline: 0;
            background-image: url(../img/remove-icon-small.png) !important;
        }

        .close {
            float: right;
            font-size: 21px;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .2;
            filter: alpha(opacity=20);
        }
        .sidebar-nav .nav-link {
            display: flex;
            align-items: center;
            font-size: 15px;
            font-weight: 600;
            color: #012970;
            transition: 0.3;
            background: #fff;
            padding: 10px 15px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('Home')}}" class="logo d-flex align-items-center">
            <img src={{asset('Back/assets/img/logo.png')}} alt="">
            <span class="d-none d-lg-block">Admin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form action="{{route('search')}}" method="GET" class="search-form d-flex align-items-center"
              autocomplete="off">
            @csrf
            <input type="text" name="search" placeholder="Search" title="Enter search keyword" class="typeahead"
                   required/>
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->


            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src={{asset('/storage/'.Auth::user()->profile_photo_path)}} width="36px;" alt="Profile"
                         class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Abeer Yousef Abu Mosameh </h6>
                        <span>Laravel developer</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('profile.show')}}">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>

                    <li>

                        <form method="POST" action="{{route('logout')}}">
                            @csrf

                            <button class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </button>
                        </form>


                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link ">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{  route('categories.index') }} ">
                        <i class="bi bi-circle"></i><span>All Categories</span>
                    </a>
                </li>
                <li>
                    <a href=" {{ route('categories.create') }}">
                        <i class="bi bi-circle"></i><span>Create Category</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link  collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-cart"></i><span>Stores</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('stores.index') }}">
                        <i class="bi bi-circle"></i><span>All Stores </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stores.create') }}">
                        <i class="bi bi-circle"></i><span>Create New Store</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('stores_rate') }}">
                <i class="bi bi-star"></i>
                <span>Stores Rate</span>
            </a>
        </li><!-- End Dashboard Nav -->


    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{  route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item"><a>@yield('pagetype')</a></li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src={{asset('Back/assets/vendor/apexcharts/apexcharts.min.js')}}></script>
<script src={{asset('Back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<script src={{asset('Back/assets/vendor/chart.js/chart.min.js')}}></script>
<script src={{asset('Back/assets/vendor/echarts/echarts.min.js')}}></script>
<script src={{asset('Back/assets/vendor/quill/quill.min.js')}}></script>
<script src={{asset('Back/assets/vendor/simple-datatables/simple-datatables.js')}}></script>
<script src={{asset('Back/assets/vendor/tinymce/tinymce.min.js')}}></script>
<script src={{asset('Back/assets/vendor/php-email-form/validate.js')}}></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins and Typeahead) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Typeahead.js Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"
        integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Template Main JS File -->
<script src={{asset('Back/assets/js/main.js')}}></script>
<script type="text/javascript">
    var path = "{{ url('search') }}";
    $('input.typeahead').typeahead({
        source: function (query, process) {
            return $.get(path, {query: query}, function (data) {
                return process(data);
            });
        }
    });
</script>
@stack('js')
</body>

</html>
