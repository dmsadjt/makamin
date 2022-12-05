@extends('layouts.app')
@section('title', 'Detail Transaksi')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header bg-dark text-white d-flex gap-3">
                        <button class="btn btn-outline-light"><a href="/transaksi"
                                style="color:inherit; text-decoration:inherit">&lt;&lt;</a></button>
                        <span class="d-flex align-items-center justify-content-center">Pesanan nomor
                            {{ $transaksi->id }}</span>
                    </div>
                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <h5 class="card-title h-5">Tinjau pesanan nomor {{ $transaksi->id }}</h5>

                            <div class="bg-white mt-2 overflow-hidden shadow sm:rounded-lg">
                                <div class="p-6  text-gray-900">
                                    <table class="table">
                                        <tr>
                                            <td>Nama User</td>
                                            <td>{{ $transaksi->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Makam</td>
                                            <td>{{ $transaksi->makam->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pemesanan</td>
                                            <td>{{ $transaksi->tanggal_pemesanan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Makam</td>
                                            <td>{{ $transaksi->jumlah_makam }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Pembelian</td>
                                            <td>{{ $transaksi->total_pembelian }}</td>
                                        </tr>

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
