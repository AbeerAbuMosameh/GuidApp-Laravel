@extends('Back.layouts.main')
@section('title', 'Edit Category')
@section('pagetype', 'Edit Category')
@section('content')


    <div class="container">
        @foreach ($errors->all() as $msg)
            <div class="alert alert-danger">{{ $msg }}</div>
        @endforeach

        <div class="row">
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Edit Category</h5>
                    <!-- Vertical Form -->
                    <form class="row g-3" method="Post" action="{{ route('categories.update', $category->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Category Description</label>
                            <input type="text" name="description" class="form-control"
                                value="{{ $category->description }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Category Image</label>
                            <input type="file" name="image" class="form-control">

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back <i
                                    class="fa fa-back"></i></a>

                        </div>
                    </form><!-- Vertical Form -->

                </div>
                </form>

            </div>
            <div class="col-4">
                <img class="card-img-top mt-5" src="{{ Storage::url($category->image) }}" width="500px"
                    height="280px" alt="Card image cap" style="border-radius:20px;">

            </div>
        </div>
    </div>
@stop
