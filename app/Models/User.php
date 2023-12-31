<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $hidden = [
        'password'
    ];
    protected $fillable = ['id_pos', 'nama', 'jabatan', 'email', 'password', 'level'];
}
