<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class facturecontroller extends Controller
{
    public function show($n): view
    {
        return view('factures')->with('numero', $n);
    }
}
