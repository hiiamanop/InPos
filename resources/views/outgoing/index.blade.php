@extends('layouts.master')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Outgoing</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item">Menu</li>
                    <li class="breadcrumb-item active">Outgoing</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Outgoing</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ url('outgoing-kirim') }}" enctype="multipart/form-data">
                                {{-- @csrf --}}
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tujuan Divisi</label>
                                    <div class="col-sm-10">
                                        <select name="divisi" id="divisi" class="form-control">
                                            <option disabled selected value>Tujuan</option>
                                            <option value="1">Eksternal</option>
                                            <option value="2">Internal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tujuan Divisi</label>
                                    <div class="col-sm-10">
                                        <select name="divisi" id="divisi" class="form-control">
                                            <option disabled selected value>Pilih divisi</option>
                                            <option value="1">Deputi EGM</option>
                                            <option value="2">Manajer Pelayanan Outlet & Operasi Cabang</option>
                                            <option value="3">Manajer Operasi Kurir</option>
                                            <option value="4">Manajer Solusi Teknologi</option>
                                            <option value="5">Manajer Keuangan & Aset</option>
                                            <option value="6">Manajer Kesekretariatan</option>
                                            <option value="7">Manajer Pengawas Umum</option>
                                            <option value="8">Manajer Bisnis Jasa Keuangan</option>
                                            <option value="9">Manajer Penjualan, Korporat, Kurir Logistik</option>
                                            <option value="10">Manajer Ritel/Kemitraan</option>
                                            <option value="11" style="font-weight:bold">Semua</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tujuan</label>
                                    <div class="col">
                                        <input type="text" value="" name="perihal" id="perihal"
                                            class="form-control" placeholder="Masukan Perihal">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Perihal</label>
                                    <div class="col">
                                        <input type="text" value="" name="perihal" id="perihal"
                                            class="form-control" placeholder="Masukan Perihal">
                                    </div>
                                </div>

                                <div class="row mb-3" >
                                    <label for="inputText" class="col-sm-2 col-form-label">Lampiran</label>
                                    <div class="col">
                                        <input type="file" value="" name="lampiran" id="lampiran"
                                            class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <label for="inputText" class="col-sm-2 col-form-label">Isi Surat</label>
                                    <div class="col-sm-10">
                                        <!-- Quill Editor Full -->
                                        <div id="quill_editor"></div>
                                        <input type="hidden" id="isisurat" name="isisurat">
                                        <!-- End Quill Editor Full -->
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <a type="submit" class="btn btn-primary" href="{{'/outgoing-preview'}}"> Kirim</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <script>
        var quill = new Quill('#quill_editor', {
            theme: 'snow'
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("isiberita").value = quill.root.innerHTML;
        });
    </script>
@endsection
