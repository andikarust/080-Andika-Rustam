@extends('layouts.admin')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Jenis Aktivitas</h3>
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
                    {{-- <a href={{ route('admin.tambah') }}> --}}
                    <h5 class="card-title">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary d-flex justify-content-end bg-success"
                                data-bs-toggle="modal" data-bs-target="#tambahjenismodal">
                                Tambah Aktivitas
                            </button>
                            <!-- Include the modal -->
                            @include('admin.tambahjenis')
                        </div>
                    </h5>
                    {{-- </a> --}}
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
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="edit">
                                                <button type="button"
                                                    class="btn btn-primary d-flex justify-content-end bg-warning"
                                                    data-bs-toggle="modal" data-bs-target="#editjenismodal" style="">
                                                    <span class="material-symbols-outlined" style="font-size: 20px;">
                                                        edit_square
                                                    </span>
                                                </button>
                                                <!-- Include the modal -->
                                                @include('admin.editjenis')
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="hapus">
                                                <button type="button"
                                                    class="btn btn-primary d-flex justify-content-end bg-danger"
                                                    data-bs-toggle="modal" data-bs-target="#hapusmodal">
                                                    <span class="material-symbols-outlined" style="font-size: 20px;">
                                                        delete
                                                    </span>
                                                </button>
                                                <!-- Include the modal -->
                                                @include('admin.hapusjenis')
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
