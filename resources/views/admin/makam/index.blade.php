@extends('layouts.app')
@section('title', 'Daftar Makam')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <a class="btn btn-secondary mb-2" href="/admin/home">Kembali</a>
                </div>
                <div class="card">
                    <div class="card-header">Daftar Makam</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                                <div class="p-1 text-gray-900">
                                    <table class="table">
                                        <thead>
                                            <th>#</th>
                                            <th>Nama Makam</th>
                                            <th>Alamat</th>
                                            <th>Agama</th>
                                            <th>Tempat Tersedia</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($makam as $m)
                                                <tr>
                                                    <td>
                                                        {{ $m->id }}
                                                    </td>
                                                    <td>{{ $m->nama }}</td>
                                                    <td>{{ $m->alamat }}</td>
                                                    <td>{{ $m->agama }}</td>
                                                    <td>{{ $m->tempat_tersedia }}</td>
                                                    <td><a href="/admin/makam/{{ $m->id }}">Lihat Makam</a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>

                                </div>
                                <div class="m-2">
                                    {{ $makam->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
