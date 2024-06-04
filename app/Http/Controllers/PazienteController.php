<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PazienteController extends Controller
{
    public function PazienteDashboard(){

        return view('paziente.paziente_dashboard');
    
        }//End Method
}
