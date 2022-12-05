@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white">{{ __('Dashboard') }}</div>

                    <div class="card-body bg-purple-light shadow-md">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="py-2">
                            <div class="mx-auto">
                                <div class="bg-white overflow-hidden shadow rounded py-2">
                                    <div class="px-5 text-gray-900">
                                        <h1>Halo, {{ Auth::user()->name }}</h1>
                                        <p>Apa yang ingin anda lakukan hari ini?</p>
                                    </div>

                                    <div class="px-5 text-gray-900">
                                        <div class="row rounded p-2 text-black shadow">
                                            <div class="col-10">
                                                <h2 class="fs-3">Lihat daftar <span
                                                        class="text-white bg-dark">makam</span></h2>
                                                <p>Lihat makam-makam yang bisa dipesan di Surabaya! pilih lokasi yang sesuai
                                                    dengan preferensi anda</p>
                                                <button class="btn btn-dark"><a href="/makam" class="text-white">Tekan
                                                        aku!</a></button>
                                            </div>
                                            <div class="col-2">
                                                <img src="/img/makamin.png" style="height: 10em"
                                                    class="rounded-circle shadow" alt="makamin.png">
                                            </div>
                                        </div>

                                        <div class="row rounded mt-3 p-2 text-white bg-dark shadow">
                                            <div class="col-10">
                                                <h2 class="fs-3">Lihat daftar <span
                                                        class="text-black bg-white">transaksi</span></h2>
                                                <p>Lihat status pemesanan makam anda!</p>
                                                <button class="btn btn-outline-light"><a href="/transaksi"
                                                        style="text-decoration: inherit; color:inherit">Tekan
                                                        aku!</a></button>
                                            </div>
                                            <div class="col-2">
                                                <img src="/img/makamin.png" style="height: 10em"
                                                    class=" rounded-circle shadow" alt="makamin.png">
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
    </div>
@endsection
