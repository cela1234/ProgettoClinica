<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PazienteController extends Controller
{
    public function index(): View {
        return view('paziente');
    }
}
