<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisi';
    protected $fillable = ['id_disposisi', 'perihal', 'catatan', 'status', 'nomor_surat','divisi'];
    public $timestamps = false;
}
