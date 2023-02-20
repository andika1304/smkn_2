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
                    <label for="" class="form-label">NAMA SEKOLAH</label>
                    <input type="text" name="sekolah" class="form-control" id="text">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">WHATSAPP</label>
                    <input type="number" name="no" class="form-control" id="number">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">EMAIL</label>
                    <input type="email" name="email" class="form-control" id="" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">ALAMAT</label>
                    <input type="text" name="alamat" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>

        </div>

    </form>
@endsection
