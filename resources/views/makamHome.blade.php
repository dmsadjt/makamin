@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">Dashboard Makam</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <h1>Halo, {{ Auth::user()->name }}</h1>
                                    <p>Lihat kondisi makam anda pada hari ini!</p>
                                </div>

                                <div class="p-6 text-gray-900">
                                    <div class="row rounded mt-3 p-2 text-white bg-dark shadow">
                                        <div class="col-10">
                                            <h2 class="fs-3">Lihat daftar <span
                                                    class="text-black bg-white">transaksi</span></h2>
                                            <p>Lihat status pemesanan makam anda!</p>
                                            <button class="btn btn-outline-light"><a href="/makam/transaksi"
                                                    style="text-decoration: inherit; color:inherit">Tekan
                                                    aku!</a></button>
                                        </div>
                                        <div class="col-2">
                                            <img src="/img/makamin.png" class=" rounded-circle shadow" alt="makamin.png">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
