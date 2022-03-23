@extends('Back.layouts.main')
@section('title', 'Stores Rates')
@section('pagetype', 'Stores Rates')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Rating</th>
                    <th>Trending</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>
                            <img class="card-img-top" src="{{ env('APP_URL3') .$store->image }}" style="border-radius: 10%;" width="100px"
                                height="100px" alt="Card image cap">
                        </td>
                        <td>{{ $store->name }}</td>
                        <td>{{ substr($store->description, 0, 80) }}</td>
                        <td>{{ $store->address }}</td>
                        <td>{{ $store->Phone }}</td>
                        <td>
                            {{ array_sum(
                                \App\Models\Rate::where('Store_id', $store->id)->pluck('stars_rated')->toArray(),
                            ) /
                                count(
                                    \App\Models\Rate::where('Store_id', $store->id)->pluck('stars_rated')->toArray(),
                                ) }}
                        </td>
                        <td>

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
@stop

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
