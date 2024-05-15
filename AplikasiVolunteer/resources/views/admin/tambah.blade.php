@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic Inputs</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="basicInput">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Jadwal Kegiatan</label>
                        <input type="date" class="form-control" id="basicInput" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Lokasi Kegiatan</label>
                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Lokasi Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Batas Registrasi</label>
                        <input type="date" class="form-control" id="basicInput" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <a href={{ route('admin.acara') }}>
                    <button type="submit" class="btn btn-primary me-1 mb-1">
                    Submit
                    </button>
                    </a>
                  <button
                    type="reset"
                    class="btn btn-light-secondary me-1 mb-1">
                    Reset
                  </button>
                </div>
              </div>
        </div>
    </div>
</section>


@endsection