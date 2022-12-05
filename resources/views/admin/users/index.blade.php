@extends('layouts.app')
@section('title', 'Daftar Makam')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <a class="btn btn-dark mb-2" href="/admin/home">Kembali</a>
                </div>
                <div class="card">
                    <div class="card-header bg-dark text-white">Daftar pengguna</div>

                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body ">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-1 text-gray-900">
                                    <table class="table">
                                        <thead>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Alamat Email</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $m)
                                                <tr>
                                                    <td>
                                                        {{ $m->id }}
                                                    </td>
                                                    <td>{{ $m->name }}</td>
                                                    <td>{{ $m->email }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>

                                </div>

                                <div class="m-2">
                                    {{ $user->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
