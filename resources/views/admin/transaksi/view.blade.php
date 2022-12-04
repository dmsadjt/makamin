@extends('layouts.app')
@section('title', 'Detail Transaksi')


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
                            <div class="bg-white mt-2 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6  text-gray-900">
                                    <table>
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
                                        <form action="/admin/transaksi/setujui" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $view->id }}">
                                            <input type="submit" value="Setujui">
                                        </form>

                                        <form action="/admin/transaksi/tolak" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $view->id }}">
                                            <input type="submit" value="Tolak">
                                        </form>
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