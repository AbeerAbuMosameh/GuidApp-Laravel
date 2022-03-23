@extends('Back.layouts.main')
@section('title','Show Caterory')
@section('pagetype','Show Category')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        <div class="card-body">
            <h5 class="card-title">Show Category</h5>

            <!-- Vertical Form -->
            <form class="row g-3">
                <div class="col-12">
                <label for="inputNanme4" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4" value="{{$category->name}}" disabled>
              </div>

              <div class="col-12">
                <label for="inputEmail4" class="form-label">Category Description</label>
                <input type="text" name="description" class="form-control" id="inputEmail4" value="{{$category->description}}" disabled>
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Category Image</label>
                <img class="card-img-top" style="border-radius:20px;"  src="{{Storage::url($category->image)}}" width="600px" height="400px" alt="Card image cap">

              </div>
              <div class="text-center">
                <a href="{{route('categories.index')}}" class="btn btn-secondary">Back <i class="fa fa-back"></i></a>
              </div>
            </form><!-- Vertical Form -->

          </div>
    </form>

        </div>
</div>
</div>
@stop

