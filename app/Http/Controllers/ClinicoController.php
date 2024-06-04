<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicoController extends Controller
{
    public function ClinicoDashboard(){

        return view('clinico.clinico_dashboard');
    
        }//End Method
}
