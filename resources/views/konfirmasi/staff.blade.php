@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Konfirmasfa-inverse</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active">Konfirmasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card preview">
                        <div class="card-body">
                            <h5 class="card-title">Konfirmasi</h5>
                            <div class="row">
                                <div class="col konfirmasi">
                                    <iframe src="{{ asset('file-pdf/1.pdf') }}" frameborder="20" width="300"
                                        height="400"></iframe>
                                </div>
                                <div class="col tombol">
                                    <div class="row">
                                        <div class="col">
                                            <h5>catatan:</h5>
                                            <p>Telah dilaksanakan pak</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn btn-sm badge disposisi" style="background-color: green"
                                                href="{{ url('/unduh') }}">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn btn-sm badge disposisi" style="background-color: orange"
                                                href="{{ url('/disposisi-kirim') }}">Disposisi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <style>
        .konfirmasi {
            width: 100%;
            /* Sesuaikan dengan lebar iframe */
            height: 400px;
            /* Sesuaikan dengan tinggi iframe */
        }

        .konfirmasi img {
            width: 100%;
            /* Skala gambar sesuai lebar iframe */
            height: auto;
            /* Menyesuaikan tinggi gambar secara proporsional */
        }

        .tombol {
            margin-top: 10px;
            margin-left: 20px
        }

        .disposisi {
            width: 200px;
            height: 50px;
            padding-top: 18px;
            margin-bottom: 10px;
            border-radius: 10px;
            font-size: 15px;
        }
    </style>
@endsection
