@extends('layouts.master')

@section('content')

{{-- CONTACT PAGE --}}
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
                        {{-- <a href="{{ url('contact-add') }}" class="btn btn-primary mb-2">Add</a> --}}

                        <!-- Default Table -->
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col">No. Surat</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Pengirim</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tindakan</th>
                                </tr>
                            </thead>
                            {{-- <tbody> --}}
                                {{-- akan di isi --}}
                                {{-- @foreach ($data as $dt)
                                <tr>
                                  <th scope="row">{{$loop->index + 1}}</th>
                                  <td>{{$dt->name}}</td>
                                  <td>{{$dt->email}}</td>
                                  <td>{{$dt->plan}}</td>
                                  <td>{{$dt->project}}</td>
                                  <td>
                                    <a href="{{url('contact-edit')}}/{{$dt->id}}" class="btn btn-sm btn-success">Edit</a>
                                    <a onclick="return confirm('yakin hapus data?')" href="{{url('contact-delete')}}/{{$dt->id}}" class="btn btn-sm btn-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach --}}
                            {{-- </tbody> --}}
                            <tbody>
                                <tr>
                                    {{-- <th scope="row">{{$loop->index + 1}}</th> --}}
                                    <td>1</td>
                                    <td>Tugas Perintah Magang.pdf</td>
                                    <td>KCU/PLG/001</td>
                                    <td>Tugas yang akan diberikan kepada anak magang</td>
                                    <td>Manajer SDM</td>
                                    <td>Sudah terbaca</td>
                                    <td>
                                      {{-- <a href="{{url('contact-edit')}}/{{$dt->id}}" class="btn btn-sm btn-success">Buka</a> --}}
                                      <a class="btn btn-sm badge" style="background-color: orange" href="{{url('/disposisi-kirim')}}">Disposisi</a>
                                      {{-- <a onclick="return confirm('yakin hapus data?')" href="{{url('contact-delete')}}/{{$dt->id}}" class="btn btn-sm btn-danger">Delete</a> --}}
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    {{-- <th scope="row">{{$loop->index + 1}}</th> --}}
                                    <td>2</td>
                                    <td>Lembar Pengesahan Kepada Camat regional Kemuning.pdf</td>
                                    <td>KCU/PLG/002</td>
                                    <td>Lembar pengesahan Kepala Camat Kemuning</td>
                                    <td>KCU Palembang</td>
                                    <td>Belum terbaca</td>
                                    <td>
                                      {{-- <a href="{{url('contact-edit')}}/{{$dt->id}}" class="btn btn-sm btn-success">Buka</a> --}}
                                      <a class="btn btn-sm badge" style="background-color: orange" href="{{url('/disposisi-kirim')}}">Disposisi</a>
                                      {{-- <a onclick="return confirm('yakin hapus data?')" href="{{url('contact-delete')}}/{{$dt->id}}" class="btn btn-sm btn-danger">Delete</a> --}}
                                    </td>
                                  </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
