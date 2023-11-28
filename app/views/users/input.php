<h2>Tambahkan User Baru</h2>                
                
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