<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakamController extends Controller
{
    public function index()
    {
        return view('makam.index');
    }


    public function view()
    {
        return view('makam.view');
    }

    public function order()
    {
        return view('makam.order');
    }

    public function success()
    {
        return view('makam.success');
    }
}
