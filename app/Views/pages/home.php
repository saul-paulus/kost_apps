<?= $this->extend('layouts/template.php') ;  ?>

<?=$this->section('content'); ?>


<div class="row">
    <div class="col hero-header">
        <div class="jumbotron jumbotron-fluid bg-light">
            <div class="container">
                <div class="mt-5 text-center text-dark">
                    <h1 class="display-4 mb-4">-Kos Kota Ambon-</h1>
                    <div class="deskripsi-jumbotron text-monospace">
                        <p>Layanan kos kosan di Kota Ambon untuk anda yang sedang mencari sesuai kriteria</p>
                        <p>Kamar aman, teman nyaman, akses mudah sesuai kebutuhan anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col mb-3">
        <div class="container">
            <?php if (session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <h3 class="my-3">Kos-kosan impian Anda</h3>
        </div>
    </div>
</div>

<div class="container" style="margin-bottom: 20rem;">
    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach($kos as $k): ?>
        <div class="col-md-4 mb-4">
            <div class="card bg-light" style="height: 37rem;">
                <img src="/img/img-data/<?=$k['gambar']; ?>" class="card-img-top" style="height:300px;"
                    alt="img-<?=$k['gambar']; ?>">
                <div class="card-body bg-light ">
                    <h5 class="card-title"><?=$k['judul']; ?></h5>
                    <p class="card-text card-alamat mt-3"><img src="/img/icon-details/point.png" alt="icon-wc"
                            style="width: 15px; height:25px;"> <?=$k['alamat']; ?>, <?=$k['area']; ?> </p>
                    <p class="card-text">Rp. <?=$k['harga']; ?> <b>/ Bulan</b></p>
                    <p class="card-text my-3"><small class="text-muted">Last updated: <?= $k['updated_at']; ?></small>
                    </p>
                </div>

                <a href="/kos/detail/<?= $k['slug']; ?>" class="btn bg-dark text-light rounded-0">Detail</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>