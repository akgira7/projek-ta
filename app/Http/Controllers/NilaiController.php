<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    function nilai()
    {
        return view('dataPenilaian/nilai');
    }
}
