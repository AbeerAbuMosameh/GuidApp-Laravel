@extends('Front.layouts.main')
@section('title', 'All Stores ')

@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <style>
        /* rating */
        .rating-css div {
            color: #ffe400;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;
        }

        .rating-css input+label {
            font-size: 30px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }

        /* End of Star Rating */

    </style>

@stop

@section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href={{ route('Home') }} class="logo d-flex align-items-center">
                <img src={{ asset('Front/assets/img/logo.png') }} alt="">
                <span>GuidApp</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href={{ route('Home') }}>Home</a></li>
                    <li><a class="nav-link scrollto" href={{ route('Home') . '/#category' }}>Categories</a></li>
                    <li><a class="nav-link scrollto" href={{ route('login') }}>Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
@stop


@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{ route('addRating') }}" method="POST">
                    @csrf
                    <input type="hidden" name="Store_id">
                    <input type="hidden" name="ipaddress" value="{{ Request::ip() }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rate Store</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"> &times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="rating-css">
                            <div class="star-icon">
                                <input type="radio" value="1" name="stars_rated" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="stars_rated" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="stars_rated" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="stars_rated" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="stars_rated" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Rate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="values"></section>
    <section class="values">
        <div class="container">
            <div class="row">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <header class="section-header">
                            <h2>Our stores</h2>
                            <p>All Stores in {{ $name }}</p>
                        </header>

                        <div class="row m-10">
                            @foreach ($errors->all() as $msg)
                            <div class="alert alert-danger">{{ $msg }}</div>
                        @endforeach

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ Session::get('success') }}
                                </div>


                            @endif
                            @foreach ($stores as $store)
                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" hi>
                                    <div class="box">
                                        <img style="border-radius:20px;" src={{ Storage::url($store->image) }}
                                            width="300px" height="200px" alt="">
                                        <h2 style="font-size: 18px;">{{ $store->name }}</h2>
                                        <p style="color: #888 ">{{ $store->address }}</p>
                                        <p style="color: rgb(24, 2, 85)"> <i class="fa fa-phone"></i>
                                            {{ $store->Phone }}</p>
                                        <p style="color: rgb(24, 2, 85);">
                                            {{ $store->description }}
                                        </p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalLong" data-store-id="{{ $store->id }}">
                                            Rate Store {{ $store->name }}
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
    <!--JS below-->


    <!--modal-->
    <script>
        $(document).ready(function() {
            $("#exampleModalLong").modal();
        });
    </script>
    <script>
        $('#exampleModalLong').on('show.bs.modal', function(e) {
            //get data-id attribute of the clicked element
            var storeId = $(e.relatedTarget).data('store-id');
            //populate the textbox
            $(e.currentTarget).find('input[name="Store_id"]').val(storeId);
        });
    </script>
@stop
