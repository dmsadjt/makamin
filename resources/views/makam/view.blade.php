@extends('layouts.app')
@section('title', $view->nama)


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white d-flex gap-3">
                        <button class="btn btn-outline-light"><a href="/makam"
                                style="color:inherit; text-decoration:inherit">&lt;&lt;</a></button>
                        <span class="d-flex align-items-center justify-content-center">Lihat Makam :
                            {{ $view->nama }}</span>
                    </div>

                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <h1 class="fs-3 text-black text-center">Detail Makam</h1>
                            <div class="bg-white mt-2 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6  text-gray-900">
                                    <table class="table">
                                        <tr>
                                            <td>Nama Makam</td>
                                            <td>{{ $view->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Makam</td>
                                            <td>{{ $view->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Agama Makam</td>
                                            <td>{{ $view->agama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Tersedia di Makam</td>
                                            <td>{{ $view->tempat_tersedia }}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga Makam (Rp)</td>
                                            <td>{{ $view->harga }}</td>
                                        </tr>

                                    </table>

                                    <a href="/makam/order/{{ $user->id }}/{{ $view->id }}"><button
                                            class="btn btn-dark mt-2">Pesan Tempat</button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
