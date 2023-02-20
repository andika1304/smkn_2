@extends('Admin.layouts.index')

@section('title')
    COMPANY
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <form action="/web-admin/company/store/" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="id_c">ID COMPANY</label>
                    <input type="number" name="id_c" id="id_c" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_c">NAMA COMPANY</label>
                    <input type="text" name="nama_c" id="nama_c" class="form-control">
                    <div class="form-gruop">
                        <label for="foto_b">FOTO COMPANY</label>
                        <input type="file" name="foto_b" id="foto_b" class="form-control" accept=".png, .jpg">
                    </div>
                    <div class="form-group">
                        <label for="co_">DESKRIPSI COMPANY</label>
                        <input type="text" name="co_" id="co_" class="form-control">
                        <div class="form-gruop">
                        </div>
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-btn-sm btn-primary">
            </form>
        </div>
    </div>
@endsection
