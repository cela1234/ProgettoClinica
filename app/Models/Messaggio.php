<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messaggio extends Model
{
    use HasFactory;
    protected $table = "messaggio";
    protected $primaryKey = "id";
    protected $fillable = [
        'oggetto',
        'corpo',
        'idAccountMittente',
        'idAccountDestinatario',
    ];
}
