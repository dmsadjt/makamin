<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Makam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MakamUserController extends Controller
{
    public function transaksiIndex()
    {
        $transaksi = Transaksi::paginate(10);
        return view('userMakam.transaksi.index', compact('transaksi'));
    }

    public function transaksiView($id)
    {
        $view = Transaksi::where('id', $id)->first();
        return view('userMakam.transaksi.view', compact('view'));
    }

    public function setujuiTransaksi(Request $request)
    {
        $transaksi = Transaksi::where('id', $request->id);

        $transaksi->update([
            'status' => 'disetujui',
        ]);

        return redirect('/makam/transaksi');
    }

    public function tolakTransaksi(Request $request)
    {
        $transaksi = Transaksi::where('id', $request->id)->first();
        $makam = Makam::where('id', $transaksi->makam_id)->first();

        $temp = $transaksi->jumlah_makam + $makam->tempat_tersedia;

        $makam->update([
            'tempat_tersedia' => $temp,
        ]);

        $transaksi->update([
            'status' => 'ditolak',
        ]);

        return redirect('/makam/transaksi');
    }
}
