<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Makam;

class TransaksiController extends Controller
{
    public function post(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'makam_id' => 'required',
            'jml_pesanan' => 'integer',
            'tgl_pesanan' => 'date',
            'kk' => 'file',
            'ktp' => 'file',
            'pengantar_rt' => 'file',
            'keterangan_rs' => 'file',
            'keterangan_lurah' => 'file'
        ]);

        $transaksi = new Transaksi;
        $transaksi->user_id = $data['user_id'];
        $transaksi->makam_id = $data['makam_id'];
        $transaksi->tanggal_pemesanan = $data['tgl_pesanan'];
        $transaksi->jumlah_makam = $data['jml_pesanan'];
        $transaksi->status = 'diproses';
        $transaksi->save();

        $makam = Makam::where('id', $transaksi->makam_id)->first();
        $temp = $makam->tempat_tersedia - $transaksi->jumlah_makam;
        $makam->update([
            'tempat_tersedia' => $temp,
        ]);

        return redirect('/makam/success/' . $transaksi->id);
    }
}
