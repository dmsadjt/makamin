@extends('layouts.app')

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
                            <a href="/admin/makam">Makam</a>
                            <a href="/admin/users">Users</a>
                            <a href="/admin/transaksi">Transaksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
