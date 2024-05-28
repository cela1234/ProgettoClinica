<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paziente extends Model
{
    protected $table = "paziente";
    protected $primaryKey = "idAccount";
    protected $fillable = [
        'idAccount',
        'genere',
        'indirizzo',
        'telefono',
        'email',
        'idClinico',
    ];
}
