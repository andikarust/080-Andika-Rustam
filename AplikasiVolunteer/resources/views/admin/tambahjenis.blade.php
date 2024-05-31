<!-- Modal -->
<div class="modal fade" id="tambahjenismodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Jenis Aktivitas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="modalForm">
                                <div class="form-group">
                                    <label for="basicInput"></label>
                                    <input type="text" class="form-control" id="basicInput"
                                        placeholder="Masukkan Nama Jenis Aktivitas">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
                    Reset
                </button>
                <a class="btn btn-primary bg-success" href="{{ route('admin.jenisaktivitas') }}">
                    Submit
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    // Reset form when modal is hidden
    document.getElementById('tambahjenismodal').addEventListener('hidden.bs.modal', function () {
        document.getElementById('modalForm').reset();
    });
</script>