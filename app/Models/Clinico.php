<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinico extends Model
{
    protected $table = "clinico";
    protected $primaryKey = "idAccount";
    protected $fillable = [
        'idAccount',
        'specializzazione',
        'ruolo'
    ];
}
