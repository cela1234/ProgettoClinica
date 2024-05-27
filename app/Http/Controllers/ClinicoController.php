<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicoController extends Controller
{
    public function index(): View {
        return view('clinico');
    }
}
