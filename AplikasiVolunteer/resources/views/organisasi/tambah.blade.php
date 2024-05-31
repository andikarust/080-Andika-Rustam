<!-- Modal -->
<div class="modal fade" id="tambahmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Aktivitas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="modalForm" action="{{ route('aktivitas.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="basicInput">Nama Aktivitas</label>
                                    <input type="text" class="form-control" id="judul_aktivitas" name="judul_aktivitas" placeholder="Masukkan Nama Kegiatan" value="{{ old('judul_aktivitas')}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="3" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Kegiatan">{{ old('deskripsi')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Lokasi</label>
                                    <input type="text" class="form-control" id="basicInput"
                                        placeholder="Masukkan Lokasi Kegiatan" id="lokasi" name="lokasi" value="{{ old('lokasi')}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jadwal Aktivitas</label>
                                    <input type="date" class="form-control" id="basicInput" placeholder="" id="tanggal_aktivitas" name="tanggal_aktivitas" value="{{ old('tanggal_aktivitas')}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Batas Registrasi</label>
                                    <input type="date" class="form-control" id="basicInput" placeholder="" id="tanggal_batas_registrasi" name="tanggal_batas_registrasi" value="{{ old('tanggal_batas_registrasi')}}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jenis Aktivitas</label>
                                    <select class="select2 form-control" name="id_activities_type" id="id_activities_type">
                                        <option value="">-- Pilih Jenis --</option>
                                        @foreach ( $type as $t )
                                        <option value="{{ $t->id }}">{{ $t->nama_jenis_aktivitas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Cover</label>
                                    <input type="file" class="form-control" id="basicInput" placeholder="" id="cover" name="cover" value="{{ old('cover')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
                        Reset
                    </button>
                    <button type="submit" class="btn btn-success">
                        Submit
                    </button>
                    <a class="btn btn-success" href="{{ route('aktivitas.store') }}">
                        Submittt
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Reset form when modal is hidden
    document.getElementById('tambahmodal').addEventListener('hidden.bs.modal', function() {
        document.getElementById('modalForm').reset();
    });
</script>
