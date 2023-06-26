<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $table = 'file';

    protected $fillable = ['nomor_surat', 'nama_file', 'tanggal', 'id_pos', 'file_pdf', 'keterangan'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
