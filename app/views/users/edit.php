<h1>Edit Data User</h1>
<hr><br>

<div class="card">
    <h4 class="card-header">Edit Data User</h4>
    <div class="card-body">
        <form action="<?= URL; ?>/users/update" method="POST">
            <input type="hidden" name="user_id" value="<?= $data['row']['user_id']; ?>">
            <div class="mb-3">
                <label for="email" class="form-label">Email address <sup class="text-danger fw-bold">*</sup></label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                    value="<?= $data['row']['user_email']; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password <sup class="text-danger fw-bold">*</sup></label>
                <input type="password" class="form-control" id="password" name="password"
                    value="<?= $data['row']['user_password']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap<sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['row']['user_nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="alamat" name="alamat"
                    value="<?= $data['row']['user_alamat']; ?>">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No Hp <sup class="text-danger fw-bold">*</sup></label>
                <input type="number" class="form-control" id="nohp" name="nohp" value="<?= $data['row']['user_hp']; ?>">
            </div>
            <div class="mb-3">
                <label for="kodepos" class="form-label">Kode Pos <sup class="text-danger fw-bold">*</sup></label>
                <input type="number" class="form-control" id="kodepos" name="kodepos"
                    value="<?= $data['row']['user_pos']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-update-user">Save changes</button>
        </form>
    </div>
</div>