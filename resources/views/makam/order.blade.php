@extends('layouts.app')
@section('title', 'Pesan | ' . $view->nama)


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white d-flex gap-3">
                        <button class="btn btn-outline-light"><a href="/makam"
                                style="color:inherit; text-decoration:inherit">&lt;&lt;</a></button>
                        <span class="d-flex align-items-center justify-content-center">Pesan Makam :
                            {{ $view->nama }}</span>
                    </div>

                    <div class="card-body bg-purple-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="card-body">

                            <div class="bg-white overflow-hidden shadow-sm rounded p-2">
                                <h1 class="text-black fs-3 text-center mt-4">Form Pemesanan</h1>
                                <div class="px-6 text-gray-900">
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
                                <h2 class="px-6 mt-0 fs-5 text-black">Additional Data</h2>
                                <div class="px-6 text-gray-900">
                                    <form action="/transaksi/post" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input type="hidden" name="makam_id" value="{{ $view->id }}">

                                        <div>
                                            <label for="jml_pesanan">Jumlah Makam <span style="color:red">*</span></label>
                                            <input class="form-control" type="number" name="jml_pesanan" id="jml_pesanan"
                                                required>
                                        </div>

                                        <div>
                                            <label for="tgl_pesanan">Tanggal Pesanan <span
                                                    style="color:red">*</span></label>
                                            <input class="form-control" type="date" name="tgl_pesanan" id="tgl_pesanan"
                                                required>

                                        </div>

                                        <div>
                                            <label for="kk">Kartu Keluarga <span style="color:red">*</span></label>
                                            <input class="form-control" type="file" name="kk" id="kk"
                                                required>
                                        </div>
                                        <div>
                                            <label for="ktp">Kartu Tanda Penduduk <span
                                                    style="color:red">*</span></label>
                                            <input class="form-control" type="file" name="ktp" id="ktp"
                                                required>

                                        </div>
                                        <div>
                                            <label for="pengantar_rt">Surat Pengantar RT/RW</label>
                                            <input class="form-control" type="file" name="pengantar_rt"
                                                id="pengantar_rt">

                                        </div>
                                        <div>
                                            <label for="pengantar_rs">Surat Pengantar Rumah Sakit</label>
                                            <input class="form-control" type="file" name="keterangan_rs"
                                                id="keterangan_rs">

                                        </div>
                                        <div>
                                            <label for="keterangan_lurah">Surat Keterangan Kelurahan</label>
                                            <input class="form-control" type="file" name="keterangan_lurah"
                                                id="keterangan_lurah">

                                        </div>

                                        <p class="mt-3 mb-0">Keterangan:</p>
                                        <p><span style="color:red">*</span> : Required</p>

                                        <input type="submit" class="btn btn-dark my-2" value="Pesan Makam">
                                    </form>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
