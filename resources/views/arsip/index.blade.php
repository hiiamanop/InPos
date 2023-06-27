@extends('layouts.master')

@section('content')
    {{-- CONTACT PAGE --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabel Arsip</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

<<<<<<< HEAD
                    <div class="card flex">
=======
                    <div class="card">
>>>>>>> 7255af853a252abca41c99b6ae3318bb2d04bbc6
                        <div class="card-body">
                            <h5 class="card-title">Contact List</h5>
                            {{-- <a href="{{ url('contact-add') }}" class="btn btn-primary mb-2">Add</a> --}}

                            <!-- Default Table -->
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama File</th>
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
<<<<<<< HEAD
                                    <tr>
                                        {{-- <th scope="row">{{$loop->index + 1}}</th> --}}
                                        <td>1</td>
                                        <td>Tugas Perintah Magang.pdf</td>
                                        <td>Tugas yang akan diberikan kepada anak magang</td>
                                        <td>Manajer SDM</td>
                                        <td>Sudah terbaca</td>
                                        <td>
                                            {{-- <a class="btn btn-sm btn-success">Buka</a> --}}
                                            <a class="btn btn-sm btn-success" href="{{ url('/preview-file') }}">Buka</a>
                                            {{-- <a onclick="return confirm('yakin hapus data?')" href="{{url('contact-delete')}}/{{$dt->id}}" class="btn btn-sm btn-danger">Delete</a> --}}
                                            <a class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        {{-- <th scope="row">{{$loop->index + 1}}</th> --}}
                                        <td>2</td>
                                        <td>Lembar Pengesahan Kepada Camat regional Kemuning.pdf</td>
                                        <td>Lembar pengesahan Kepala Camat Kemuning</td>
                                        <td>KCU Palembang</td>
                                        <td>Belum terbaca</td>
                                        <td>
                                            {{-- <a href="{{url('contact-edit')}}/{{$dt->id}}" class="btn btn-sm btn-success">Buka</a> --}}
                                            <a class="btn btn-sm btn-success">Buka</a>
                                            {{-- <a onclick="return confirm('yakin hapus data?')" href="{{url('contact-delete')}}/{{$dt->id}}" class="btn btn-sm btn-danger">Delete</a> --}}
                                            <a class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
=======
                                    @foreach ($arsip as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            {{-- <td>1</td> --}}
                                            <td>{{ $item->file_pdf }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->posisi['jabatan'] }}</td>
                                            <td>Sudah terbaca</td>
                                            <td>
                                                {{-- <a class="btn btn-sm btn-success">Buka</a> --}}
                                                <a class="btn btn-sm btn-success" href="{{ url('/preview-file') }}">Buka</a>
                                                {{-- <a onclick="return confirm('yakin hapus data?')" href="/arsip/delete/{file_pdf}" class="btn btn-sm btn-danger">Delete</a> --}}
                                                {{-- <a class="btn btn-sm btn-danger">Delete</a> --}}
                                                <form action="/arsip/delete/{{ $item->file_pdf }}" method="POST"
                                                    style="display: inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger" id="delete">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
>>>>>>> 7255af853a252abca41c99b6ae3318bb2d04bbc6
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
<<<<<<< HEAD
                </div>  
=======

                </div>
>>>>>>> 7255af853a252abca41c99b6ae3318bb2d04bbc6
            </div>
        </section>

    </main><!-- End #main -->
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 7255af853a252abca41c99b6ae3318bb2d04bbc6
