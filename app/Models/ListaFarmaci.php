<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaFarmaci extends Model
{
    use HasFactory;
    protected $table = "listaFarmaci";
    protected $primaryKey = "id";
    protected $fillable = [
        'nome',
        'descrizione'
    ];
}
