@extends('Back.layouts.main')
@section('title','All Categorias')
@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Category Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)


          <tr>
            <th scope="row">{{"$category->id"}}</th>
            <th><img src="{{$category->image}}" width="100px" height="100px"></th>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>
                <div class="mt-stats">
                    <div class="btn-group btn-group btn-group-justified">
                        <a href="{{ url('Back/categories/'.$category->id.'/edit') }}" class="btn font-green">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <a href="{{ url('Back/categories/'.$category->id.'/delete') }}" class="btn confirm font-red">
                            <i class="icon-trash"></i> Delete
                        </a>
                    </div>
            </td>
          </tr>

          @endforeach



        </tbody>
      </table>
      <div> {{$categories->links()}}</div>
</div>

@stop

