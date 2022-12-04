<?php

namespace App\Http\Controllers;

use App\Models\Makam;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function makamIndex()
    {
        $makam = Makam::paginate(10);
        return view('admin.makam.index', compact('makam'));
    }

    public function makamView($id)
    {
        $view = Makam::where('id', $id)->first();
        return view('admin.makam.view', compact('view'));
    }

    public function usersIndex()
    {
        $user = User::paginate(10);
        return view('admin.users.index', compact('user'));
    }

    public function transaksiIndex()
    {
        $transaksi = Transaksi::paginate(10);
        return view('admin.transaksi.index', compact('transaksi'));
    }

    public function transaksiView($id)
    {
        $view = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.view', compact('view'));
    }

    public function setujuiTransaksi(Request $request)
    {
        $transaksi = Transaksi::where('id', $request->id);

        $transaksi->update([
            'status' => 'disetujui',
        ]);

        return redirect('/admin/transaksi');
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

        return redirect('/admin/transaksi');
    }
}
