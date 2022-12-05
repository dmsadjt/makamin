@extends('layouts.app')
@section('title', 'Daftar Makam')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white d-flex gap-3">
                        <button class="btn btn-outline-light"><a href="/home"
                                style="color:inherit; text-decoration:inherit">&lt;&lt;</a></button>
                        <span class="d-flex align-items-center justify-content-center">Daftar makam</span>
                    </div>

                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white overflow-hidden shadow-sm rounded">
                                <div class="p-1 text-gray-900">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>#</th>
                                            <th>Nama Makam</th>
                                            <th>Alamat</th>
                                            <th>Agama</th>
                                            <th>Tempat Tersedia</th>
                                            <th>Harga (Rp)</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody class="table-striped ">
                                            @foreach ($makam as $m)
                                                <tr>
                                                    <td>
                                                        {{ $m->id }}
                                                    </td>
                                                    <td>{{ $m->nama }}</td>
                                                    <td>{{ Str::limit($m->alamat, 20) }}</td>
                                                    <td>{{ $m->agama }}</td>
                                                    <td>{{ $m->tempat_tersedia }}</td>
                                                    <td>{{ $m->harga }}</td>
                                                    <td><a href="/makam/{{ $m->id }}" class="text-dark">Lihat
                                                            Makam</a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>

                                </div>

                                <div class="d-flex justify-content-center">
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
