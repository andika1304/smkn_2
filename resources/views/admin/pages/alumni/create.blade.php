@extends('admin.layouts.index')
@section('title')
    TAMBAH DATA BERITA
@endsection

@section('content')
    <form action="/web-admin/alumni/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="text">
                </div>
                @error('nama')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="text">
                </div>
                @error('jurusan')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="" class="form-label">Angkatan</label>
                    <input type="text" name="angkatan" class="form-control" id="text">
                </div>
                @error('angkatan')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="" class="form-label">Jenis Kelamin</label> <br>
                    <input type="radio" name="jk" value="L" id="text"> Laki Laki <br>
                    <input type="radio" name="jk" value="P" id="text"> Perempuan
                </div>
                @error('jk')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="" class="form-label">FOTO</label>
                    <input type="file" name="foto" class="form-control" id="text">
                </div>
                @error('foto')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
    </form>
@endsection
