@extends('Back.layouts.main')
@section('title','Admin Dashbord')
@section('pagetype','Welcome')

@section('content')

<div class="container">
    <h2> Welcome {{Auth::user()->name}}! </h2>
    <div class="col-lg-12 hero-img mR-5" data-aos="zoom-out" data-aos-delay="200">
<img src="Front/assets/img/hero-img.png" class="img-fluid" alt="" style="margin-left: 420px">
      </div>
</div>

@stop

