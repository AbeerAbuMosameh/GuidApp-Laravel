@extends('Back.layouts.main')
@section('title','All Stores')
@section('pagetype','All Store')

@section('content')

<div class="container">
    @foreach ( $errors->all() as  $msg)
    <div class="alert alert-danger">{{ $msg }}</div>
    @endforeach
    <div class="row">
        @foreach ($stores as $store)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{"$store->image" }}" width="400px" height="250px" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{ substr($store->name, 0, 20)}}</h5>
                    <p class="card-text">{{substr($store->description, 0, 80)}} ...</p>
                    <div class="row">
                    <div class="col-4">
                    <a href="{{route('stores.show', "$store->id ")}}" style="width: 82px; font-size: 13px;" class="btn btn-primary">show <i class="fa fa-eye"></i></a>
                    </div>

                    <div class="col-4">
                    <a href="{{route('stores.edit', $store->id)}}" style="width: 82px; font-size: 13px;" class="btn btn-secondary">edit  <i class="fa fa-edit"></i></a>
                    </div>

                    <div class="col-4">
                    <form method="POST" action="{{route('stores.destroy', $store->id)}}">
                        @csrf
                        @method('delete')
                        <button style="width: 82px; font-size: 13px;" onclick="return confirm('Are you sure?')" class="btn btn-danger">delete  <i class="fa fa-trash"></i></button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="http://guidapp.test/stores?page=1">1</a></li>
          <li class="page-item"><a class="page-link" href="http://guidapp.test/stores?page=2">2</a></li>
          <li class="page-item"><a class="page-link" href="http://guidapp.test/stores?page=3">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    {{-- <div> {{$stores->links()}}</div> --}}

</div>

@stop

