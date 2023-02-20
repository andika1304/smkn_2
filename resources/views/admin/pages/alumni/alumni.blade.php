@extends('admin.layouts.index')
@section('title')
    DATA alumni
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="/web-admin/alumni/create" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Angkatan</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($alumni as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->jurusan }}</td>
                                        <td>{{ $row->angkatan }}</td>
                                        <td>{{ $row->jk }}</td>
                                        <td class="text-center">
                                            <img src="{{ 'http://127.0.0.1:8000'.Storage::url('alumni/') . $row->foto }}" class="rounded"
                                                style="width: 100px">
                                        </td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="/web-admin/alumni/destroy/{{ $row->id_alumni }}" method="POST">
                                                <a href="/web-admin/alumni/edit/{{ $row->id_alumni }}"
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
