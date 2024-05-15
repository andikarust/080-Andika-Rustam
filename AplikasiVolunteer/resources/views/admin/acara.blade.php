@extends('layouts.admin')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kelola Acara</h3>
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
                <a href={{ route('admin.tambah') }}>
                <h5 class="card-title">
                    <div class="d-flex justify-content-end">
                        <span class="badge bg-success">Tambah Acara</span>
                    </div>                    
                </h5>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jadwal</th>
                            <th>Lokasi</th>
                            <th>Batas Registrasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Graiden</td>
                            <td>01-01-2024</td>
                            <td>Bandung</td>
                            <td>30-12-2023</td>
                            <td>
                                <span class="badge bg-success">Edit</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dale</td>
                            <td>01-01-2024</td>
                            <td>Bandung</td>
                            <td>30-12-2023</td>
                            <td>
                                <span class="badge bg-success">Edit</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nathaniel</td>
                            <td>01-01-2024</td>
                            <td>Bandung</td>
                            <td>30-12-2023</td>
                            <td>
                                <span class="badge bg-success">Edit</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Darius</td>
                            <td>01-01-2024</td>
                            <td>Bandung</td>
                            <td>30-12-2023</td>
                            <td>
                                <span class="badge bg-success">Edit</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Oleg</td>
                            <td>01-01-2024</td>
                            <td>Bandung</td>
                            <td>30-12-2023</td>
                            <td>
                                <span class="badge bg-success">Edit</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection

<script src="{{ asset('mazer/dist/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{ asset('mazer/dist/assets/static/js/pages/simple-datatables.js')}}"></script>