@extends('Admin.layouts.index')

@section('title')
    KONTAK
@endsection

@section('conten')
<div id="page-wrapper">
    <div class="main-page">
        <h2 class="form-weight-bold">KONTAK</h2>
        <form action="/web-admin/kontak/store" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="id_k">ID</label>
            <input type="number" name="id_k" id="id_k" class="form-control">
        </div>

        <div class="form-group">
            <label for="sekolah">NAMA SEKOLAH</label>
            <input type="text" name="sekolah" id="sekolah" class="form-control">
        </div>

        <div class="form-group">
            <label for="no">WHATSAPP</label>
            <input type="number" name="no" id="no" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="alamat">ALAMAT</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
        </div>
        <input type="submit" value="Simpan" name="simpan" class="btn btn-btn-sm btn-primary">
        </form>
    </div>
</div>

@endsection
