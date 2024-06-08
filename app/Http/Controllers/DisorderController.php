<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisturbiMotoriPaziente; 

class DisorderController extends Controller
{
    public function show($idAccountPaziente, $idDisturbo)
    {
        $disorder = DisturbiMotoriPaziente::where('idAccountPaziente', $idAccountPaziente)
                                          ->where('idDisturbo', $idDisturbo)
                                          ->firstOrFail();
        return view('disorder', compact('disorder'));
    }
}