@extends('Back.layouts.main')
@section('title', 'Edit Store')
@section('pagetype', 'Edit Store')
@section('content')
    <div class="container">

@foreach ( $errors->all() as  $msg)
<div class="alert alert-danger">{{ $msg }}</div>
@endforeach
        <div class="row">
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">Edit Store</h5>

                    <form class="row g-3" method="Post" action="{{ route('stores.update', $store->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-10">
                            <label class="form-label">Store Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $store->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Address</label>
                            <input type="address" name="address" class="form-control" value="{{ $store->address }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="Phone" class="form-control" value="{{ $store->Phone }}">
                        </div>
                        <div class="col-10">
                            <label class="form-label">Description</label>
                            <textarea type="text" name="description"
                                class="form-control">{{ $store->description }} </textarea>


                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="Category_id">
                                @foreach ($categories as $category)
                                    @if ($category->id == $store->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-5">
                            <label class="form-label">image</label>
                            <input type="file" name="image" class="form-control">
                        </div>



                        <div class="text-center mt-5 ml-5" style="margin-left: -55px;">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('stores.index') }}" class="btn btn-secondary">Back <i
                                    class="fa fa-back"></i></a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-4">
                <img class="card-img-top mt-5" src="{{ Storage::url($store->image) }}" width="500px" height="300px"
                    alt="Card image cap" style="border-radius:20px;">
            </div>

        </div>
    @stop
