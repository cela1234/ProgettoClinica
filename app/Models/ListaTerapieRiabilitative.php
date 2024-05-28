<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaTerapieRiabilitative extends Model
{
    use HasFactory;
    protected $table = "listaTerapieRiabilitative";
    protected $primaryKey = "id";
    protected $fillable = [
        'nome',
        'descrizione'
    ];
}
