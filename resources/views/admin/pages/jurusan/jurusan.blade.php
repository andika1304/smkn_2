@extends('admin.layouts.index')
@section('title')
    DATA JURUSAN
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="/web-admin/jurusan/create" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">FOTO JURUSAN</th>
                                    <th scope="col">NAMA JURUSAN</th>
                                    <th scope="col">DESKRIPSI</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jurusan as $row)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ 'http://127.0.0.1:8000'.Storage::url('jurusan/') . $row->foto_k }}" class="rounded"
                                                style="width: 100px">
                                        </td>
                                        <td>{{ $row->nama_k }}</td>
                                        <td>{!! $row->desk_k !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="/web-admin/jurusan/destroy/{{ $row->id }}" method="POST">
                                                <a href="/web-admin/jurusan/edit/{{ $row->id }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
