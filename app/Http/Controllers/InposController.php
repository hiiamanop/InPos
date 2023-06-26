<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Files;
use Illuminate\Http\Request;

class InposController extends Controller
{
    public function storefile(Request $request)
    {
        $request->validate([
            'file_pdf' => 'required'
        ], [
            'file_pdf.required' => 'Foto wajib diisi'
            // 'file_pdf.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG dan GIF'
        ]);

        $nomor_surat = Helper::IDGenerator2(new Files, 'nomor_surat', 3, 'KCU-PLG');
        $tanggal = date('Y-m-d H:i:s');
        $nama_file = Helper::IDGenerator(new Files, 'nama_file', 3, date("dm", strtotime($tanggal)));
        $foto_file = $request->file('file_pdf');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('file-pdf'), $foto_nama);
        $data = [
            'nomor_surat' => $nomor_surat,
            'nama_file' => $nama_file,
            'tanggal' => $tanggal,
            'id_pos' => Session('id_pos'),
            'file_pdf' => $foto_nama,

        ];


        // $q = new Files;
        // $q->nomor_surat = $nomor_surat;
        // $q->nama_file = $nama_file;
        // $q->tanggal = $tanggal;
        // $q->id_pos = $id_pos;
        // $q->save();
        Files::create($data);
        return redirect('admin/berita')->with('success', 'Berhasil Memasukkan Data');
    }
}
