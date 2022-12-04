@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h6">
                            Dashboard Administrator
                        </h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul class="list-group">
                            <li class="list-group-item">
                                <h2><a class="link-dark" href="/admin/makam">Daftar Makam</a></h2>
                                <small class="text-black-50">Lihat makam yang terdaftar</small>
                            </li>
                            <li class="list-group-item">
                                <h2><a class="link-dark" href="/admin/users">Daftar Pengguna</a></h2>
                                <small class="text-black-50">Lihat pengguna yang terdaftar</small>
                            </li>
                            <li class="list-group-item">
                                <h2><a class="link-dark" href="/admin/transaksi">Daftar Transaksi</a></h2>
                                <small class="text-black-50">Lihat transaksi yang sedang berlangsung</small>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
