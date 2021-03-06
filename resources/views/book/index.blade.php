@extends('book')

@section('main')
<a href="{{ url("book/create") }}" class="btn btn-success mb-1">Add New</a>
    <div class="row">
        <div class="col=md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Halaman</th>
                        <th>Tahun Terbit</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book as $book)                     
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->judul}}</td>
                        <td>{{$book->penulis}}</td>
                        <td>{{$book->halaman}}</td>
                        <td>{{$book->tahunterbit}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url("book/{$book->id}/edit") }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ url("book/{$book->id}") }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection