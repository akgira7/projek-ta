<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    function fuzzy()
    {
        return view('dataHimpunanFuzzy/fuzzy');
    }
}
