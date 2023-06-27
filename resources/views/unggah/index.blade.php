@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Unggah File</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item">Tabel</li>
                    <li class="breadcrumb-item active">Unggah</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Unggah File</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="/unggah/file" enctype="multipart/form-data">
                                @csrf
                               <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Lampiran</label>
                                    <div class="col-sm-10">
                                        <input type="file" value="" name="file_pdf" class="form-control" id="file_pdf" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Teks...." required>
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
                                        <button type="submit" class="btn btn-primary">Unggah</button>
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
