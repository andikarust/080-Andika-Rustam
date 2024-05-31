<!-- Modal -->
<div class="modal fade" id="hapusmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Jenis Aktivitas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus data tersebut?</p>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>
                <a class="btn btn-primary bg-success" href="{{ route('admin.listaktivitas') }}">
                    Yakin
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    // Reset form when modal is hidden
    document.getElementById('hapusmodal').addEventListener('hidden.bs.modal', function () {
        document.getElementById('modalForm').reset();
    });
</script>