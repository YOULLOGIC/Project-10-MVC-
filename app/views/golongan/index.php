<h1>Data Golongan</h1>
<hr><br>

<!-- START : Modal Tambah Data Golongan -->
<div class="modal fade" id="tambah-golongan" tabindex="-1" aria-labelledby="tambah-golonganLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambah-golonganLabel">Tambah Data golongan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= URL; ?>/golongan/save" method="POST">
                    <div class="mb-3">
                        <label for="kode_gol" class="form-label">Kode Golongan <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="kode_gol" class="form-control" id="kode_gol" name="kode_gol" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_gol" class="form-label">Nama Golongan <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="text" class="form-control" id="nama_gol" name="nama_gol" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END : Modal Tambah Data User -->

<div class="card shadow">
    <h4 class="card-header py-3">Detail Data Golongan</h4>
    <div class="card-body">
        <button type="button" name="btn-tambah-golongan" class="btn btn-primary mb-3" data-bs-toggle="modal"
            data-bs-target="#tambah-golongan"><strong>+</strong>Tambah Data</button>
        <table class="table" id="dtb">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Kode Golongan</th>
                    <th>Nama Golongan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data["rows"] as $row) {
                    ?>
                    <tr>
                        <td>
                            <?= $no++; ?>
                        </td>
                        <td>
                            <?= $row["gol_kode"]; ?>
                        </td>
                        <td>
                            <?= $row["gol_nama"]; ?>
                        </td>
                        <td>
                            <a href="<?= URL; ?>/golongan/edit/<?= $row['gol_id']; ?>"
                                class="btn btn-success fw-bold text-white">Edit</a>
                            <a href="<?= URL; ?>/golongan/delete/<?= $row['gol_id']; ?>" class="btn btn-danger fw-bold"
                                onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>