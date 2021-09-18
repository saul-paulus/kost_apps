<?= $this->extend('layouts/template.php'); ?>



<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <div class="jumbotron bg-light">
            <div class="container text-center my-4">
                <img src="/img/saul.jpg" class="img-thumbnail rounded-circle" alt="img-hero" style="width:200px;">
                <h1 class="my-2">saulDev</h1>
                <p class="lead">Programer | Front-end Web Developer | Back-end Web Developer</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <p class="text-justify">Saya adalah seorang programer pemula, saat ini saya sedang mengikuti pelatihan web
                development dari
                Clevio Coder Camp, dan saya telah memasuki tugas chekpoint 2. Dimana pada tugas tersebut kita diminta
                untuk membuat sebuah aplikasi CRUD sederhana dengan menggunkan codeigniter 4. Sehingga untuk dapat
                melanjutkan ke modul selanjutnya maka saya membuat tugas aplikasi ini.</p>
        </div>
        <div class="col-6">
            <p class="text-justify">Ini adalah aplikasi pencari kos kosan untuk daerah kota ambon, sehingga dengan
                menggunakan aplikasi ini, maka setiap orang dapat mencari kamar kos yang diinginkan sesuai kriteria yang
                diinginkan. Didalam aplikasi ini juga dibuat suatu deskripsi dan gambar dari kamar kos yang dicari, maka
                dapat mempermudah orang-orang untuk melihat dan mencari kamar kos tersebut</p>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>