<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Files;
use Illuminate\Http\Request;

class InposController extends Controller
{
    public function storefile(Request $request)
    {
        return view('welcome');
        $request->validate([
            'file_pdf' => 'required|mimes:jpeg,jpg'
        ], [
            'file_pdf.required' => 'Foto wajib diisi',
            'file_pdf.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG dan GIF'
        ]);

        $nomor_surat = Helper::IDGenerator2(new Files, 'nomor_surat', 3, 'KCU-PLG');
        $tanggal = $request->tanggal;
        $id_pos = $request->id_pos;
        $nama_file = Helper::IDGenerator(new Files, 'nama_file', 3, date("dm", strtotime($tanggal)));
        $foto_file = $request->file('imageberita');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('image-berita'), $foto_nama);
        $data = [
            'nomor_surat' => $request->input('judulberita'),
            'id_pos' => $request->input('lokasi'),
            'tanggal' => $request->input('date'),
            'isiberita' => $request->input('isiberita'),
            'imageberita' => $foto_nama
        ];


        $q = new Files;
        $q->nomor_surat = $nomor_surat;
        $q->nama_file = $nama_file;
        $q->tanggal = $tanggal;
        $q->id_pos = $id_pos;
        $q->save();
        Files::create($data);
        return redirect('admin/berita')->with('success', 'Berhasil Memasukkan Data');
    }
}
