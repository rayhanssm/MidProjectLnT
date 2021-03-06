@extends('book')

@section('main')
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Edit</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url("/book/{$book->id}") }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input value="{{$book->judul}}" class="form-control" type="text" name="judul">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input value="{{$book->penulis}}" class="form-control" type="text" name="penulis">
                </div>
                <div class="form-group">
                    <label for="halaman">Halaman</label>
                    <input value="{{$book->halaman}}" class="form-control" type="text" name="halaman">
                </div>
                <div class="form-group">
                    <label for="tahunterbit">Tahun Terbit</label>
                    <input value="{{$book->tahunterbit}}" class="form-control" type="text" name="tahunterbit">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection