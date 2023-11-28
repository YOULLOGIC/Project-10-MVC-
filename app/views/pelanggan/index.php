<?php

$user_id = $_SESSION['user']["user_id"];

?>
<h1>Data Pelanggan</h1>
<hr><br>
<!-- START : Modal Tambah Data pelanggan -->
<div class="modal fade" id="tambah-pelanggan" tabindex="-1" aria-labelledby="tambah-pelangganLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambah-pelangganLabel">Tambah Data Pelanggan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= URL; ?>/pelanggan/save" method="POST">
                    <input type="hidden" name="id_user" value="<?= $user_id; ?>">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Pelanggan <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="kode" class="form-control" id="kode" name="kode"required>
                    </div>
                    <div class="mb-3">
                        <label for="gol_id" class="form-label">Jenis Golongan <sup
                                class="text-danger fw-bold">*</sup></label>
                        <select name="gol_id" id="gol_id" class="form-control">
                            <?php
                            foreach ($data['gol'] as $row):
                                ?>
                                <option value="<?= $row['gol_id']; ?>">
                                    <?= $row['gol_nama']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama <sup class="text-danger fw-bold">*</sup></label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat <sup class="text-danger fw-bold">*</sup></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">No Hp <sup class="text-danger fw-bold">*</sup></label>
                        <input type="number" class="form-control" id="nohp" name="nohp" required>
                    </div>
                    <div class="mb-3">
                        <label for="noktp" class="form-label">No Ktp <sup class="text-danger fw-bold">*</sup></label>
                        <input type="number" class="form-control" id="noktp" name="noktp" required>
                    </div>
                    <div class="mb-3">
                        <label for="seri" class="form-label">No Seri PLN <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="number" class="form-control" id="seri" name="seri" required >
                    </div>
                    <div class="mb-3">
                        <label for="meteran" class="form-label">No Meteran <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="number" class="form-control" id="meteran" name="meteran" required >
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
<!-- END : Modal Tambah Data Pelanggan -->

<div class="card shadow">
    <h4 class="card-header py-3">Detail Data Pelanggan</h4>
    <div class="card-body">
        <button type="button" name="btn-tambah-pelanggan" class="btn btn-primary mb-3" data-bs-toggle="modal"
            data-bs-target="#tambah-pelanggan"><strong>+</strong>Tambah Data</button>
        <table class="table" id="dtb">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>No Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>No Ktp</th>
                    <th>No Seri PLN</th>
                    <th>Meteran PLN</th>
                    <th>Status</th>
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
                            <?= $row["pel_no"]; ?>
                        </td>
                        <td>
                            <?= $row["pel_nama"]; ?>
                        </td>
                        <td>
                            <?= $row["pel_alamat"]; ?>
                        </td>
                        <td>
                            <?= $row["pel_hp"]; ?>
                        </td>
                        <td>
                            <?= $row["pel_ktp"]; ?>
                        </td>
                        <td>
                            <?= $row["pel_seri"]; ?>
                        </td>
                        <td>
                            <?= $row["pel_meteran"]; ?>
                        </td>
                        <?php if ($row["pel_aktif"] == 'Y'): ?>
                            <td>
                                <span class="badge text-bg-warning">Aktif</span>
                            </td>
                        <?php else: ?>
                            <td>
                                <span class="badge text-bg-danger">Nonaktif</span>
                            </td>
                        <?php endif; ?>
                        <td>
                            <a href="<?= URL; ?>/pelanggan/edit/<?= $row['pel_id']; ?>"
                                class="btn btn-success fw-bold text-white">Edit</a>
                            <a href="<?= URL; ?>/pelanggan/delete/<?= $row['pel_id']; ?>" class="btn btn-danger fw-bold"
                                onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>