@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Disposisi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item">Menu</li>
                    <li class="breadcrumb-item active">Disposisi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Disposisi</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ url('disposisi-kirim') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tujuan Divisi</label>
                                    <div class="col-sm-10">
                                        <select name="divisi" id="divisi" class="form-control">
                                            <option disabled selected value>Pilih divisi</option>
                                            <option value="1">Deputi EGM</option>
                                            <option value="2">Pelayanan Outlet & Operasi Cabang</option>
                                            <option value="3">Operasi Kurir</option>
                                            <option value="4">Solusi Teknologi</option>
                                            <option value="5">Keuangan & Aset</option>
                                            <option value="6">Kesekretariatan</option>
                                            <option value="7">Pengawas Umum</option>
                                            <option value="8">Bisnis Jasa Keuangan</option>
                                            <option value="9">Penjualan, Korporat, Kurir Logistik</option>
                                            <option value="10">Ritel/Kemitraan</option>
                                            <option value="11" style="font-weight:bold">Semua</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Perihal</label>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="Segera tanggapi"
                                            value="true" id="Segera tanggapi">
                                        <label class="form-check-label" for="Segera Tanggapi ">Segera tanggapi</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="Harap dipedomani"
                                                    value="true" id="Harap dipedomani">
                                                <label class="form-check-label" for="Harap dipedomani">Harap
                                                    dipedomani</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="Monitor Pelaksanaan" value="true"
                                                            id="Monitor Pelaksanaan">
                                                        <label class="form-check-label" for="rememberMe">Monitor
                                                            pelaksanaan</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="Bicarakan dengan saya" value="true"
                                                                    id="Bicarakan dengan saya">
                                                                <label class="form-check-label" for="rememberMe">Bicarakan
                                                                    dengan saya</label>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="konsepkan surat ..." value="true"
                                                                            id="konsepkan surat ...">
                                                                        <label class="form-check-label"
                                                                            for="rememberMe">Konsepkan surat ...<label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="Proses Lebih Lanjut"
                                            value="true" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Proses Lebih Lanjut</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox"
                                                    name="Koordinasikan dengan ..." value="true"
                                                    id="Koordinasikan dengan ...">
                                                <label class="form-check-label" for="rememberMe">Koordinasikan dengan
                                                    ...</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="Teruskan ke ..." value="true" id="Teruskan ke ...">
                                                        <label class="form-check-label" for="rememberMe">Teruskan ke
                                                            ...</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="Laporkan ke ..." value="true"
                                                                    id="Laporkan ke ...">
                                                                <label class="form-check-label" for="rememberMe">Laporkan
                                                                    ke ...</label>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                name="FYI" value="true"
                                                                                id="FYI">
                                                                            <label class="form-check-label"
                                                                                for="rememberMe">FYI<label>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="Buat Analisa/Kajian"
                                            value="true" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Buat Analisa/Kajian</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" name="Buat surat usulsan"
                                                    value="true" id="Buat surat usulsan">
                                                <label class="form-check-label" for="rememberMe">Buat surat usulan<label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="" name="lampiran" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
