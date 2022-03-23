@extends('Back.layouts.main')
@section('title','Create Category')
@section('pagetype','Create Category')

@section('content')
<div class="container">
    @foreach ( $errors->all() as  $msg)
    <div class="alert alert-danger">{{ $msg }}</div>
    @endforeach
    <div class="row">
        <div class="col-8">
        <div class="card-body">
            <h5 class="card-title">Create Category</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="Post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control">
              </div>

              <div class="col-12">
                <label class="form-label">Category Description</label>
                <input type="text" name="description" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Category Image</label>
                <input type="file" name="image" class="form-control">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->



        </div>
</div>

<div class="col-4 hero-img mR-5" data-aos="zoom-out" data-aos-delay="200">
    <img src={{asset('Front/assets/img/create.svg')}} class="img-fluid" alt="" style="margin:40px 30px 0px 0px">
          </div>
</div>
@stop

