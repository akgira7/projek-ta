<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    function perhitungan()
    {
        return view('dataHitungan/perhitungan');
    }
}
