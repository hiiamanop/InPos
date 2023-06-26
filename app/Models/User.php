<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $hidden = [
        'password'
    ];
    protected $fillable = ['id', 'nama', 'jabatan', 'email', 'password', 'level'];
}
