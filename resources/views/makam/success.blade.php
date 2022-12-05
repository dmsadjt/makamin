@extends('layouts.app')
@section('title', 'Pemesanan Berhasil')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white d-flex gap-3">
                        <span class="d-flex align-items-center justify-content-center">Pemesanan berhasil</span>
                    </div>

                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white overflow-hidden shadow-sm rounded p-2">
                                <div class="p-6 text-gray-900">
                                    <h1 class="fs-4">
                                        Pemesananmu pada Makam <span class="text-white bg-dark">{{ $view->nama }}</span>
                                        telah <span class="text-white bg-success">berhasil</span> pada tanggal
                                        <span class="bg-dark text-white">{{ $tr->tanggal_pemesanan }}</span>
                                    </h1>

                                    <p>Pesananmu akan diverifikasi oleh administrator dan pemilik makam, informasi lebih
                                        lanjut
                                        dapat dilihat pada halaman Transaksi</p>
                                    <a href="/home" class="btn btn-dark">Kembali ke beranda</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
