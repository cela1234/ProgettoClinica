<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaDisturbiMotori extends Model
{
    use HasFactory;
    protected $table = "listaDisturbiMotori";
    protected $primaryKey = "id";
    protected $fillable = [
        'nome',
        'descrizione'
    ];
}
