<h1>Dashboard</h1>

<div class="info">Halo <strong>Admin PLN</strong>!</div>

<div class="info">Selamat datang di Sistem Informasi Pendataan PLN</div>

<div class="info">Di sini merupakan sistem untuk mendata layanan listrik di area layanan PLN. Terima kasih telah menjadi bagian dari layanan kami!</div>

<hr>
<div class="row my-5">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Data User/Petugas</h5>
            <div class="card-body">
                <h1 class="card-title">
                    <?= $data['user']; ?>   
                </h1>
                <p class="card-text">Jumlah Data User/Petugas</p>

                <a href="<?= URL; ?>/users" class="btn btn-primary">Details User</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card">
            <h5 class="card-header">Data Golongan</h5>
            <div class="card-body">
                <h1 class="card-title">
                    <?= $data['golongan']; ?>
                </h1>
                <p class="card-text">Jumlah Data Golongan</p>
                <a href="<?= URL; ?>/golongan" class="btn btn-primary">Details Golongan</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Data Pelanggan</h5>
            <div class="card-body">
                <h1 class="card-title">
                    <?= $data['pelanggan']; ?>
                </h1>
                <p class="card-text">Jumlah Data Pelanggan</p>
                <a href="<?= URL; ?>/pelanggan" class="btn btn-primary">Details Pelanggan</a>
            </div>
        </div>
    </div>
</div>