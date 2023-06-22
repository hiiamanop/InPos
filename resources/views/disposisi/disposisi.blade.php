@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Kirim File</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item">Menu</li>
                    <li class="breadcrumb-item active">Kirim File</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kirim File</h5>

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
                                        </select>
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
