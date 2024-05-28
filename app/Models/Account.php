<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "account";
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'pwd',
        'telefono',
        'datadinascita',
        'username',
        'cognome',
        'genere',
        'role'
    ];
    public function hasRole($role): bool {
        $role = (array) $role;
        return in_array($this->role, $role);
    }
}
    

