<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisturbiMotoriPaziente extends Model
{
    use HasFactory;
    protected $table = "disturbiMotoriPazienti";
    //protected $primaryKey = ['idAccountPaziente', 'idDisturbo'];
    protected $fillable = [
        'idAccountPaziente',
        'idDisturbo',
    ];
}
