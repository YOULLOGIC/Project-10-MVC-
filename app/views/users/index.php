<h1>Data User</h1>

<hr><br>

<!-- START : Modal Tambah Data User -->
<div class="modal fade" id="tambah-user" tabindex="-1" aria-labelledby="tambah-userLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambah-userLabel">Tambah Data User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= URL; ?>/users/save" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap<sup
                                class="text-danger fw-bold">*</sup></label>
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
                        <label for="kodepos" class="form-label">Kode Pos <sup
                                class="text-danger fw-bold">*</sup></label>
                        <input type="number" class="form-control" id="kodepos" name="kodepos" required>
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
    <h4 class="card-header py-3">Detail Data User</h4>
    <div class="card-body">
        <button type="button" name="btn-tambah-user" class="btn btn-primary mb-3" data-bs-toggle="modal"
            data-bs-target="#tambah-user"><strong>+</strong>Tambah Data</button>
        <table class="table" id="dtb">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Kode Pos</th>
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
                            <?= $row["user_email"]; ?>
                        </td>
                        <td>
                            <?= $row["user_nama"]; ?>
                        </td>
                        <td>
                            <?= $row["user_alamat"]; ?>
                        </td>
                        <td>
                            <?= $row["user_hp"]; ?>
                        </td>
                        <td>
                            <?= $row["user_pos"]; ?>
                        </td>
                        <td>
                            <a href="<?= URL; ?>/users/edit/<?= $row['user_id']; ?>"
                                class="btn btn-success fw-bold text-white">Edit</a>
                            <a href="<?= URL; ?>/users/delete/<?= $row['user_id']; ?>" class="btn btn-danger fw-bold"
                                onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>