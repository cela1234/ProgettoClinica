<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerapiePrescritte extends Model
{
    protected $table = "faq";
    //protected $primaryKey = ['idAccountPaziente', 'idTerapia'];
    protected $fillable = [
        'idAccountPaziente',
        'idTerapia',
        'nuovo'
    ];
}
