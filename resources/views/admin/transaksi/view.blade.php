@extends('layouts.app')
@section('title', 'Detail Transaksi')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div>
                    <a class="btn btn-dark mb-2" href="/admin/transaksi">Kembali</a>
                </div>
                <div class="card">
                    <div class="card-header bg-dark text-white">Pemesanan nomor {{ $view->id }}</div>
                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <h5 class="card-title h-5">Tinjau pesanan nomor {{ $view->id }}</h5>

                            <div class="bg-white mt-2 overflow-hidden shadow sm:rounded-lg">
                                <div class="p-6  text-gray-900">
                                    <table class="table">
                                        <tr>
                                            <td>Nama User</td>
                                            <td>{{ $view->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Makam</td>
                                            <td>{{ $view->makam->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pemesanan</td>
                                            <td>{{ $view->tanggal_pemesanan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Makam</td>
                                            <td>{{ $view->jumlah_makam }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Pembelian</td>
                                            <td>{{ $view->total_pembelian }}</td>
                                        </tr>

                                    </table>

                                    @if ($view->status == 'diproses')
                                        <div class="d-flex gap-3">
                                            <form action="/admin/transaksi/setujui" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $view->id }}">
                                                <input type="submit" class="btn btn-success" value="Setujui">
                                            </form>
                                            <form action="/admin/transaksi/tolak" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $view->id }}">
                                                <input type="submit" class="btn btn-danger" value="Tolak">
                                            </form>
                                        </div>
                                    @endif



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
