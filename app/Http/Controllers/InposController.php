<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InposController extends Controller
{
    public function storefile(Request $request)
    {
        $request->validate([
            'file_pdf' => 'required|mimes:pdf',
            'keterangan' => 'required'
        ], [
            'file_pdf.required' => 'File wajib diisi',
            'keterangan' => 'Keterangan wajib diisi',
            'file_pdf.mimes' => 'File hanya diperbolehkan berekstensi JPEG,JPG,PNG dan GIF'
        ]);

        $nomor_surat = Helper::IDGenerator2(new Files, 'nomor_surat', 3, 'KCU-PLG');
        $tanggal = date('Y-m-d H:i:s');
        $nama_file = Helper::IDGenerator(new Files, 'nama_file', 3, date("dm", strtotime($tanggal)));
        $foto_file = $request->file('file_pdf');
        $foto_nama = $nama_file . "." . $request->file('file_pdf')->getClientOriginalExtension();
        $foto_file->move(public_path('file-pdf'), $foto_nama);
        $data = [
            'nomor_surat' => $nomor_surat,
            'nama_file' => $nama_file,
            'tanggal' => $tanggal,
            'id_pos' => Session('id_pos'),
            'file_pdf' => $foto_nama,
            'keterangan' => $request->input('keterangan')
        ];

        Files::create($data);
        return redirect('/unggah')->with('success', 'Berhasil Memasukkan Data');
    }

    public function delete($file_pdf)
    {
        DB::table('file')->where('file_pdf', $file_pdf)->delete();
        return redirect('/arsip')->with('success', 'File berhasil dihapus');
    }
}
