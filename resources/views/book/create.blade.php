@extends('book')

@section('main')
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Add new</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url("/book") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input class="form-control" type="text" name="judul">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input class="form-control" type="text" name="penulis">
                </div>
                <div class="form-group">
                    <label for="halaman">Halaman</label>
                    <input class="form-control" type="text" name="halaman">
                </div>
                <div class="form-group">
                    <label for="tahunterbit">Tahun Terbit</label>
                    <input class="form-control" type="text" name="tahunterbit">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection