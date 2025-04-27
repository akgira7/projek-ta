<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilController extends Controller
{
    function hasil()
    {
        return view('dataHasilAkhir/hasil');
    }
}
