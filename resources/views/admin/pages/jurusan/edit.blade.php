@extends('admin.layouts.index')
@section('title')
    TAMBAH DATA BERITA
@endsection

@section('content')
    <form action="/web-admin/berita/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="col-md-5">
                <div class="form-group ">
                    <label for="" class="form-label">JURUSAN</label>
                    <input type="text" name="nama_b" class="form-control" id="text">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">FOTO </label>
                    <input type="file" name="foto_b" class="form-control" id="text">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">DESKRIPSI</label>
                    <input type="text" name="desk_b" class="form-control" id="" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>

        </div>

    </form>
@endsection
