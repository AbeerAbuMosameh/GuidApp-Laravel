@extends('Back.layouts.main')
@section('title','Create Store')
@section('pagetype','Create Store')
@section('content')
<div class="container">
    @foreach ( $errors->all() as  $msg)
<div class="alert alert-danger">{{ $msg }}</div>
@endforeach
    <div class="row">
        <div class="col-8">
        <div class="card-body">
           <h5 class="card-title">Create Store</h5>
            <form class="row g-3" method="Post" action="{{route('stores.store')}}" enctype="multipart/form-data">
                  @csrf
                <div class="col-md-10">
                  <label class="form-label">Store Name</label>
                  <input type="text" name="name" class="form-control" >
                </div>
                <div class="col-md-6">
                  <label  class="form-label">Address</label>
                  <input type="address" name="address" class="form-control">
                </div>
                <div class="col-md-4">
                  <label  class="form-label">Mobile</label>
                  <input type="text" name="Phone" class="form-control" >
                </div>
                <div class="col-10">
                  <label class="form-label">Description</label>
                  <textarea type="text" name="description" class="form-control" > </textarea>
                </div>
                <div class="col-md-5">
                  <label  class="form-label">Category</label>
                  <select  class="form-select" name="Category_id">
                    <option selected="">Choose...</option>
                      @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-5">
                    <label class="form-label">image</label>
                    <input type="file" name="image" class="form-control" >
                  </div>

                  <div class="text-center mt-5 ml-5" style="margin-left: -55px;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                              </div>

              </form>
        </div>
</div>

<div class="col-4 hero-img mR-5" data-aos="zoom-out" data-aos-delay="200">
    <img src={{asset('Front/assets/img/create.svg')}} class="img-fluid" alt="" style="margin:80px 30px 0px 0px">
          </div>
</div>
@stop

