<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container" style="margin-bottom: 20rem;">
    <div class="row">
        <div class="col text-right mt-3">
            <a href="/" class="btn btn-success" style="width:10%"><img src="/img/icon-details/back.png" alt="icon-wc"
                    style="width: 20px;"></a>
            <a href="/kos/editDataKos/<?=$kos['slug']; ?>" class="btn btn-warning text-white" style="width:10%"><img
                    src="/img/icon-details/edit.png" alt="icon-wc" style="width: 20px;"> Edit</a>
            <form action="/kos/<?= $kos['id']; ?>" method="POST" class="d-inline">
                <?=csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"
                    onClick="confirm('Apakah anda yakin menghapus data ini?')"><img src="/img/icon-details/delete.png"
                        alt="icon-wc" style="width: 20px;"> Hapus</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <div class="card mt-5">
                <img src="/img/img-data/<?=$kos['gambar'] ;?>" class="card-img-top" alt=img-gambar">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold "><?=$kos['judul'] ;?></h4>
                    <p class="card-text text-muted"><img src="/img/icon-details/point.png" alt="icon-point"
                            style="width: 15px; height:25px;"> <i><?=$kos['alamat'] ;?></i>, <?=$kos['area'];?>,
                        <?=$kos['kota']; ?></p>
                </div>
                <div class="card-body text-left">
                    <table class="table table-borderless table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="card-title">Fasilitas</th>
                                <th scope="col"></th>
                                <th scope="col" class="card-title"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="/img/icon-details/ac.png" alt="icon-ac" style="width: 38px;"></td>
                                <td><?=$kos['fasilitas-ac'] ;?></td>
                                <td><img src="/img/icon-details/tv.png" alt="icon-tv" style="width: 38px;"></td>
                                <td><?=$kos['fasilitas-tv'] ;?></td>
                            </tr>
                            <tr>
                                <td><img src="/img/icon-details/wc-dalam.png" alt="icon-wc" style="width: 38px;"></td>
                                <td><?=$kos['fasilitas-kamar-mandi'] ;?></td>
                                <td><img src="/img/icon-details/lemari-pakaian.png" alt="icon-lemari-pakaian"
                                        style="width: 38px;">
                                </td>
                                <td><?=$kos['fasilitas-lemari-pakaian'] ;?></td>
                            </tr>
                            <tr>
                                <td><img src="/img/icon-details/lemari-es2.png" alt="icon-lemari-es"
                                        style="width: 38px;"></td>
                                <td><?=$kos['fasilitas-lemari-es'] ;?></td>
                                <td><img src="/img/icon-details/tempat-jumuran.png" alt="icon-jumuran"
                                        style="width: 38px;"></td>
                                <td><?=$kos['fasilitas-tempat-jumuran'] ;?></td>
                            </tr>
                            <tr>
                                <td><img src="/img/icon-details/tempat-tidur.png" alt="icon-wc" style="width: 38px;">
                                </td>
                                <td><?=$kos['fasilitas-tempat-tidur'] ;?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <hr>
            <div class="card-body text-left">
                <table class="table table-borderless table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="card-title">Lokasi kos</th>
                            <th scope="col"></th>
                            <th scope="col" class="card-title">Tipe Kos</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kota</td>
                            <td>: <?=$kos['kota']; ?></td>
                            <td>Jenis Kos</td>
                            <td>: <?=$kos['jenis-kos']; ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>: <?=$kos['kecamatan']; ?></td>
                            <td>Umur Bangunan</td>
                            <td>: <?=$kos['umur_bangunan']; ?> Tahun</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?=$kos['alamat'] ;?></td>
                            <td>Jam Bertamu</td>
                            <td>: <?=$kos['jam-bertemu'] ;?></td>
                        </tr>
                        <tr>
                            <td>Area</td>
                            <td>: Passo</td>
                            <td>Pemeliharaan Binatang</td>
                            <td>: <?=$kos['pemeliharaan-binatang'] ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="card-body text-left">
                <table class="table table-borderless table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="card-title">Deskripsi Kos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$kos['deskripsi']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="mb-5">
                <div class="card-body">
                    <p class="card-text">Rp.<?=$kos['harga']; ?> <b>/ Bulan</b></p>
                </div>
                <a href="#" class="btn btn-primary" style="width:50%"><img src="/img/icon-details/call.png"
                        alt="icon-wc" style="width: 20px;"> Hubungi</a>
                <a href="/" class="btn btn-success my-2" style="width:50%"><img src="/img/icon-details/back.png"
                        alt="icon-wc" style="width: 20px;"> Kembali</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>