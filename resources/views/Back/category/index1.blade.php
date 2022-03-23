@extends('Back.layouts.main')
@section('title', 'All Categorias')
@section('pagetype', 'All Category')
@section('content')


    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="row">
            @foreach ($categories as $category)


                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $category->image }}" width="400px" height="250px"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ substr($category->name, 0, 20) }}</h5>
                            <p class="card-text">{{ substr($category->description, 0, 80) }} ...</p>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('categories.show', $category->id) }}" style="width: 82px; font-size: 13px;"
                                        class="btn btn-primary">show <i class="fa fa-eye"></i></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ route('categories.edit', $category->id) }}" style="width: 82px;font-size: 13px;"
                                        class="btn btn-secondary">edit <i class="fa fa-edit"></i></a>
                                </div>

                                <div class="col-4">
                                    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button style="width: 82px;font-size: 13px;" onclick="return confirm('Are you sure?')"
                                            class="btn btn-danger">delete <i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        </div>

@stop
