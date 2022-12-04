@extends('layouts.app')
@section('title', 'Pemesanan Berhasil')


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
                                    Pemesananmu pada Makam {{ $view->nama }} telah berhasil pada tanggal
                                    {{ $tr->tanggal_pemesanan }}

                                    <p>Pesananmu akan diverifikasi oleh admin dan pemilik makam, informasi lebih lanjut
                                        dapat dilihat pada halaman Transaksi</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
