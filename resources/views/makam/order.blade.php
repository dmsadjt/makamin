<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesan Makam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Pesan Makam') }}
                </div>


            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
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

                <div class="p-6 text-gray-900">
                    <form action="/transaksi/post" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="makam_id" value="{{ $view->id }}">

                        <div>
                            <label for="jml_pesanan">Jumlah Makam</label>
                            <input type="number" name="jml_pesanan" id="jml_pesanan">

                        </div>

                        <div>
                            <label for="tgl_pesanan">Tanggal Pesanan</label>
                            <input type="date" name="tgl_pesanan" id="tgl_pesanan">

                        </div>

                        <div>
                            <label for="kk">Kartu Keluarga</label>
                            <input type="file" name="kk" id="kk">
                        </div>
                        <div>
                            <label for="ktp">Kartu Tanda Penduduk</label>
                            <input type="file" name="ktp" id="ktp">

                        </div>
                        <div>
                            <label for="pengantar_rt">Surat Pengantar RT/RW</label>
                            <input type="file" name="pengantar_rt" id="pengantar_rt">

                        </div>
                        <div>
                            <label for="pengantar_rs">Surat Pengantar Rumah Sakit</label>
                            <input type="file" name="keterangan_rs" id="keterangan_rs">

                        </div>
                        <div>
                            <label for="keterangan_lurah">Surat Keterangan Kelurahan</label>
                            <input type="file" name="keterangan_lurah" id="keterangan_lurah">

                        </div>


                        <input type="submit" value="Pesan Makam">
                    </form>

                </div>


            </div>
        </div>
    </div>
</x-app-layout>
