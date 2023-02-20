@extends('Admin.layouts.index')

@section('title')
    JURUSAN
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <h2 class="form-weight-bold">FORM JURUSAN</h2>
            <form action="/web-admin/jurusan/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_k">JURUSAN</label>
                    <input type="text" name="nama_k" id="nama_k" class="form-control">
                    <div class="form-group">
                        <label for="desk_b">DESKRIPSI</label>
                        <input type="text" name="desk_k" id="desk_k" class="form-control">
                        <div class="form-gruop">
                        </div>
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-btn-sm btn-primary">
            </form>
        </div>
    </div>
@endsection
