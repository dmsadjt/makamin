@extends('layouts.app')
@section('title', $view->nama)


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div>
                    <a class="btn btn-secondary mb-2" href="/admin/makam">Kembali</a>
                </div>
                <div class="card">
                    <div class="card-header">{{ $view->nama }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="bg-white mt-2 overflow-hidden shadow sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <table class="table">
                                        <tr>
                                            <td>Nama Makam</td>
                                            <td>{{ $view->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Makam</td>
                                            <td>{{ $view->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Agama Makam</td>
                                            <td>{{ $view->agama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Tersedia di Makam</td>
                                            <td>{{ $view->tempat_tersedia }}</td>
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
