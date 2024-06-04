<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisturbiMotoriPaziente; 

class DisorderController extends Controller
{
    public function show($idDisturbo)
    {
        $disorder = DisturbiMotoriPaziente::findOrFail($idDisturbo); // Fetch the disorder details
        return view('disorder', compact('disorder'));
    }
}