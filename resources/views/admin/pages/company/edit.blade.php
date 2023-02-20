@extends('admin.layouts.index')
@section('title')
    TAMBAH DATA
@endsection

@section('content')
    <form action="/web-admin/company/update" method="POST" enctype=""></form>
        @csrf
        @method('PUT')
        <div class="container">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="">NAMA COMPANY</label>
                    <input type="text" name="nama_c" id="">
                </div>
                <div>
                    <label for="">FOTO COMPANY</label>
                    <input type="file" name="foto_b" id="">
                </div>
                <div>
                    <label for="">DESKRIPSI COMPANY</label>
                    <input type="text" name="co_" id="">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
@endsection
