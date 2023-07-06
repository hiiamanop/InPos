@extends('layouts.master')

@section('content')
 <main id="main" class="main">

        <div class="pagetitle">
            <h1>Preview</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item">Kirim Surat</li>
                    <li class="breadcrumb-item active">Preview</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card preview" >
                        <div class="card-body">
                            <h5 class="card-title">Preview Surat yang Akan dikirim</h5>
                            <div class="row">
                                <div class="col">
                                    <iframe src="{{asset('file-pdf/1.pdf')}}" frameborder="20" width="800" height="500"></iframe>
                                </div>
                                <div class="col tombol">
                                    <a class="btn btn-sm badge disposisi" style="background-color: blue" href="{{url('/send')}}">Kirim</a>
                                    <a class="btn btn-sm badge disposisi" style="background-color: blue" href="{{url('/cancel')}}">Batal</a>
                                    {{-- tombol batal kembali ke page sebelummnya tanpa menghilangkan history pengisian --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <style>
        .tombol {
            margin-top: 170px;
            margin-left: 20px
        }
        .disposisi {
            width: 200px;
            height: 50px;
            padding-top: 18px;
            margin-bottom: 10px;
            border-radius: 10px;
            font-size:15px;
        }
        
    </style>
@endsection

