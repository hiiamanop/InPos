@extends('layouts.master')

@section('content')
    {{-- MAIN PAGE --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Konfirmasi Surat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Konfirmasi Surat</a></li>
                    <li class="breadcrumb-item active">Konrmasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col">
                    <div class="row">


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Hari ini</a></li>
                                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                                        <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Status Berkas <span>| Hari ini</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama File</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Pengirim</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">1</a></th>
                                                <td>Tugas Perintah Anak Magang.pdf</td>
                                                <td><a href="#" class="text-primary">Tugas yang akan
                                                        diberikan kepada anak magang</a></td>
                                                <td>Manajer SDM</td>
                                                <td><span class="badge bg-warning">Telah dikonfirmasi</span></td>
                                                <td>
                                                    {{-- apabila telah terkonfirmasi --}}
                                                    {{-- apabila ingin mengulangi upload maka, akan terupload dengan id yang sama sehingga di replace di database --}}
                                                    <a class="badge bg-primary border border-dark">Telah ditindak lanjuti</a>

                                                    {{-- apabila belum terkonfirmasi --}}
                                                    {{-- <a class="badge bg-primary border border-dark">Telah ditindak lanjuti</a> --}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">2</a></th>
                                                <td>Lembar Pengesahan Kepada Camat regional Kemuning.pdf</td>
                                                <td><a href="#" class="text-primary">Lembar pengesahan
                                                        Kepala Camat Kemuning</a></td>
                                                <td>KCU Palembang</td>
                                                <td><span class="badge bg-danger">Belum terkonfirmasi</span></td>
                                                <td>
                                                    <a class="badge bg-success border border-dark" href="{{url('/konfirmasi-post')}}">Tindak lanjuti</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main><!-- End #main -->

    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a> --}}
@endsection
