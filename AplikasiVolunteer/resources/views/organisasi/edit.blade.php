<!-- Modal -->
<div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Aktivitas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="modalForm" action="{{ route('aktivitas.edit',  $activity->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="basicInput">Nama Aktivitas</label>
                                    <input type="text" class="form-control" id="judul_aktivitas"
                                        placeholder="Masukkan Nama Kegiatan" name="judul_aktivitas"
                                        value="{{ $activity->judul_aktivitas }}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Lokasi</label>
                                    <input type="text" class="form-control" id="lokasi"
                                        placeholder="Masukkan Lokasi Kegiatan" name="lokasi"
                                        value="{{ $activity->lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Jadwal Aktivitas</label>
                                    <input type="date" class="form-control" id="tanggal_aktivitas" placeholder=""
                                        name="tanggal_aktivitas" value="{{ $activity->tanggal_aktivitas }}">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Batas Registrasi</label>
                                    <input type="date" class="form-control" id="tanggal_batas_registrasi"
                                        placeholder="" name="tanggal_batas_registrasi"
                                        value="{{ $activity->tanggal_batas_registrasi }}">
                                </div>
                                @foreach ($activityTypes as $type)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="id_activities_type"
                                            id="type{{ $type->id }}" value="{{ $type->id }}">
                                        <label class="form-check-label" for="type{{ $type->id }}">
                                            {{ $type->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
                    Reset
                </button>
                <a class="btn btn-primary bg-success" href="{{ route('aktivitas.update') }}">
                    Submit
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    // Reset form when modal is hidden
    document.getElementById('editmodal').addEventListener('hidden.bs.modal', function() {
        document.getElementById('modalForm').reset();
    });
</script>
