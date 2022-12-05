<?php

namespace App\Http\Controllers;

use App\Models\Makam;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MakamController extends Controller
{
    public function index()
    {
        $makam = Makam::paginate(10);
        return view('makam.index', compact('makam'));
    }


    public function view($id)
    {
        $view = Makam::where('id', $id)->first();
        $user = Auth::user();
        return view('makam.view', compact('view', 'user'));
    }

    public function order($idUser, $idMakam)
    {
        $user = User::where('id', $idUser)->first();
        $view = Makam::where('id', $idMakam)->first();

        return view('makam.order', compact('view', 'user'));
    }


    public function success($idTransaksi)
    {
        $tr = Transaksi::where('id', $idTransaksi)->first();
        $user = User::where('id', $tr->user_id)->first();
        $view = Makam::where('id', $tr->makam_id)->first();
        return view('makam.success', compact('user', 'view', 'tr'));
    }
}
