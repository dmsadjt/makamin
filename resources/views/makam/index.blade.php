@extends('layouts.app')
@section('title', 'Daftar Makam')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <table>
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
                                                    <td><a href="/makam/{{ $m->id }}">Lihat Makam</a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
