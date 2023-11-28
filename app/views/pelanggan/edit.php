<h1>Edit Data Pelanggan</h1>
<hr><br>

<div class="card">
    <h4 class="card-header">Edit Data Pelanggan</h4>
    <div class="card-body">
        <form action="<?= URL; ?>/pelanggan/update" method="POST">
            <input type="hidden" name="pel_id" value="<?= $data['row']['pel_id']; ?>">
            <div class="mb-3">
                <label for="pel_nama" class="form-label">Nama Pelanggan <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_nama" aria-describedby="pel_namaHelp" name="pel_nama"
                    value="<?= $data['row']['pel_nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pel_alamat" class="form-label">Alamat Pelanggan <sup
                        class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_alamat" aria-describedby="pel_alamatHelp"
                    name="pel_alamat" value="<?= $data['row']['pel_alamat']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pel_hp" class="form-label">No Hp Pelanggan <sup class="text-danger fw-bold">*</sup></label>
                <input type="number" class="form-control" id="pel_hp" aria-describedby="pel_hpHelp" name="pel_hp"
                    value="<?= $data['row']['pel_hp']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pel_aktif" class="form-label">Status Aktif <sup class="text-danger fw-bold">*</sup></label>
                <select name="pel_aktif" id="pel_aktif" class="form-control">
                    <option value="Y">Aktif</option>
                    <option value="N">Nonaktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-update-golongan">Simpan perubahan data</button>
        </form>
    </div>
</div>