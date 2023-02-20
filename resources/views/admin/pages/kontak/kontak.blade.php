@extends('admin.layouts.index')
@section('title')
    DATA BERITA
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="/web-admin/Kontak/create" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NAMA SEKOLAH</th>
                                    <th scope="col">WHATSAPP</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kontak as $row)
                                    <tr>
                                        <td class="text-center">
                                        <td>{{ $row->sekolah }}</td>
                                        <td>{{ $row->no }}</td>
                                        <td>{!! $row->desk_b !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="/web-admin/kontak/destroy/{{ $row->id }}" method="POST">
                                                <a href="/web-admin/kontak/edit/{{ $row->id }}"
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
