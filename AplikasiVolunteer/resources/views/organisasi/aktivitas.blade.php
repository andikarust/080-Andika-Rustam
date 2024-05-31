@extends('layouts.organisasi')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Aktivitas</h3>
                    {{-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary d-flex justify-content-end bg-success"
                                data-bs-toggle="modal" data-bs-target="#tambahmodal">
                                Tambah Aktivitas
                            </button>
                            <!-- Include the modal -->
                            @include('organisasi.tambah')
                        </div>
                    </h5>
                    {{-- </a> --}}
                </div>


                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Aktivitas</th>
                                <th>Lokasi</th>
                                <th>Jadwal</th>
                                <th>Batas Registrasi</th>
                                {{-- <th>Jenis Acara</th> --}}
                                <th><center>Cover</center></th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp

                            @foreach ($activity as $index)
                                <tr>
                                    <td>
                                        <center>{{ $i }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $index->judul_aktivitas }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $index->lokasi }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $index->tanggal_aktivitas }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $index->tanggal_batas_registrasi }}</center>
                                    </td>
                                    {{-- <td>
                                        <center>{{ $index->id_activities_type }}</center>
                                    </td> --}}
                                    <td width="20%">
                                        <center>{{ $index->cover }}</center>
                                    </td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-4 col-md-6 mb-3">
                                                <div class="edit d-flex justify-content-center align-items-center">
                                                    <button type="button" class="btn btn-primary bg-warning btn-lg" data-bs-toggle="modal" data-bs-target="#editmodal">
                                                        <span class="material-symbols-outlined" style="font-size: 20px;">edit_square</span>
                                                    </button>
                                                    <!-- Include the modal -->
                                                    {{-- @include('organisasi.edit') --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-3">
                                                <div class="hapus d-flex justify-content-center align-items-center">
                                                    <button type="button" class="btn btn-primary bg-danger btn-lg" data-bs-toggle="modal" data-bs-target="#hapusmodal">
                                                        <span class="material-symbols-outlined" style="font-size: 20px;">delete</span>
                                                    </button>
                                                    <!-- Include the modal -->
                                                    {{-- @include('organisasi.hapus') --}}
                                                </div>
                                            </div>
                                        </div>
                                        


                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection

<script src="{{ asset('mazer/dist/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('mazer/dist/assets/static/js/pages/simple-datatables.js') }}"></script>
<script>
    // Reset form when modal is hidden
    document.getElementById('staticBackdrop').addEventListener('hidden.bs.modal', function() {
        document.getElementById('modalForm').reset();
    });
</script>
