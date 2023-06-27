@extends('layouts.master')

@section('content')   
       {{-- MAIN PAGE --}}
            <main id="main" class="main">

                <div class="pagetitle">
                    <h1>Beranda</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item active">Dasbor</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->

                <section class="section dashboard">
                    <div class="row">

                        <!-- Left side columns -->
                        <div class="col-lg-8">
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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><a href="#">1</a></th>
                                                        <td>Tugas Perintah Anak Magang.pdf</td>
                                                        <td><a href="#" class="text-primary">Tugas yang akan
                                                                diberikan kepada anak magang</a></td>
                                                        <td>Manajer SDM</td>
                                                        <td><span class="badge bg-success">Terbaca</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#">2</a></th>
                                                        <td>Lembar Pengesahan Kepada Camat regional Kemuning.pdf</td>
                                                        <td><a href="#" class="text-primary">Lembar pengesahan
                                                                Kepala Camat Kemuning</a></td>
                                                        <td>KCU Palembang</td>
                                                        <td><span class="badge bg-danger">Belum terbaca</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div><!-- End Recent Sales -->


                            </div>
                        </div><!-- End Left side columns -->

                        <!-- Right side columns -->
                        <div class="col-lg-4">

                            <!-- Recent Activity -->
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Hari ini</a></li>
                                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                                        <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Aktivitas Terkini <span>| Hari ini</span></h5>

                                    <div class="activity">

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">32 min</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                            <div class="activity-content">
                                                Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo
                                                    officiis</a>
                                                beatae
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">56 min</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                            <div class="activity-content">
                                                Voluptatem blanditiis blanditiis eveniet
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">2 hrs</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                            <div class="activity-content">
                                                Voluptates corrupti molestias voluptatem
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">1 day</div>
                                            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                            <div class="activity-content">
                                                Tempore autem saepe <a href="#"
                                                    class="fw-bold text-dark">occaecati
                                                    voluptatem</a> tempore
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">2 days</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                            <div class="activity-content">
                                                Est sit eum reiciendis exercitationem
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">4 weeks</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                            <div class="activity-content">
                                                Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                            </div>
                                        </div><!-- End activity item-->

                                    </div>

                                </div>
                            </div><!-- End Recent Activity -->
                        </div><!-- End Right side columns -->

                    </div>
                </section>

            </main><!-- End #main -->

            {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a> --}}

@endsection
