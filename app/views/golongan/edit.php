<h1>Edit Data Golongan</h1>
<hr><br>

<div class="card">
    <h4 class="card-header">Edit Data Golongan</h4>
    <div class="card-body">
        <form action="<?= URL; ?>/golongan/update" method="POST">
            <input type="hidden" name="gol_id" value="<?= $data['row']['gol_id']; ?>">
            <div class="mb-3">
                <label for="kode_gol" class="form-label">Kode Golongan <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="kode_gol" aria-describedby="kode_golHelp" name="kode_gol"
                    value="<?= $data['row']['gol_kode']; ?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="nama_gol" class="form-label">Nama Golongan <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="nama_gol" name="nama_gol" required
                    value="<?= $data['row']['gol_nama']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-update-golongan">Save changes</button>
        </form>
    </div>
</div>