@extends('layouts.app')
@section('title', 'Daftar Transaksi')

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
                                            <th>Nama User</th>
                                            <th>Nama Makam</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Jumlah Makam</th>
                                            <th>Total Pembelian</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksi as $m)
                                                <tr>
                                                    <td>
                                                        {{ $m->id }}
                                                    </td>
                                                    <td>{{ $m->user->name }}</td>
                                                    <td>{{ $m->makam->nama }}</td>
                                                    <td>{{ $m->tanggal_pemesanan }}</td>
                                                    <td>{{ $m->jumlah_makam }}</td>
                                                    <td>{{ $m->total_pembelian }}</td>
                                                    <td>{{ $m->status }}</td>
                                                    <td><a href="/admin/transaksi/{{ $m->id }}">Tinjau transaksi</a>
                                                    </td>
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
