<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Makam;
use Illuminate\Support\Facades\Auth;

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
        $makam = Makam::where('id', $data['makam_id'])->first();
        $transaksi->user_id = $data['user_id'];
        $transaksi->makam_id = $data['makam_id'];
        $transaksi->tanggal_pemesanan = $data['tgl_pesanan'];
        $transaksi->jumlah_makam = $data['jml_pesanan'];
        $transaksi->total_pembelian = $data['jml_pesanan'] * $makam->harga;
        $transaksi->status = 'diproses';
        $transaksi->save();

        $temp = $makam->tempat_tersedia - $transaksi->jumlah_makam;
        $makam->update([
            'tempat_tersedia' => $temp,
        ]);
        return redirect('/makam/success/' . $transaksi->id);
    }

    public function index()
    {
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->paginate(10);
        return view('transaksi.index', compact('transaksi'));
    }

    public function view($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('transaksi.view', compact('transaksi'));
    }
}
