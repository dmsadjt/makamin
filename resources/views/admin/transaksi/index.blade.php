@extends('layouts.app')
@section('title', 'Daftar Transaksi')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div>
                    <a class="btn btn-dark mb-2" href="/admin/home">Kembali</a>
                </div>

                <div class="card">
                    <div class="card-header bg-dark text-white">Daftar Transaksi</div>

                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white overflow-hidden shadow-sm rounded p-2">
                                <div class="p-1 text-gray-900">
                                    <table class="table">
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
                                                    <td><span
                                                            class="{{ $m->status == 'disetujui' ? ' p-1 rounded bg-success text-white' : 'p-1 rounded bg-secondary text-white' }}">{{ $m->status }}</span>
                                                    </td>
                                                    <td><a class="link-secondary"
                                                            href="/admin/transaksi/{{ $m->id }}">Tinjau transaksi</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>

                                </div>
                                <div class="m-2">
                                    {{ $transaksi->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
