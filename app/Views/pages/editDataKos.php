<?= $this->extend('/layouts/template'); ?>



<?= $this->section('content'); ?>


<div class="container" style="margin-bottom: 20rem;">
    <div class="row">
        <div class="col-12">
            <h2 class="my-5">Tambah Data Kost</h2>
            <form action="/kos/update/<?=$kos['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?=$kos['slug']; ?>">
                <input type="hidden" name="gambarLama" value="<?=$kos['gambar']; ?>">
                <div class=" form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul"
                            name="judul" autofocus value="<?=(old('judul')) ? old('judul') : $kos['judul']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control  <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>"
                            id="harga" name="harga" value="<?=(old('harga')) ? old('harga') : $kos['harga']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="kota" name="kota">
                            <option value="<?=(old('kota')) ? old('kota') : $kos['kota']; ?>"><?=$kos['kota']; ?>
                            </option>
                            <option value="Ambon">Ambon</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="kecamatan" name="kecamatan">
                            <option value="<?=(old('kecamatan')) ? old('kecamatan') : $kos['kecamatan']; ?>">
                                <?=$kos['kecamatan'] ;?>
                            </option>
                            <option value="Sirimau">Sirimau
                            </option>
                            <option value="Baguala">Baguala
                            </option>
                            <option value="Teluk Ambon">Teluk Ambon
                            </option>
                            <option value="Nusaniwe">Nusaniwe
                            </option>
                            <option value="Leitimur Selatan">Leitimur Selatan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat (Nama jalan)</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                            id="alamat" name="alamat" value="<?=(old('alamat')) ? old('alamat') : $kos['alamat']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="area" class="col-sm-2 col-form-label">Area</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="area" name="area">
                            <option value="<?=(old('area')) ? old('area') : $kos['area']; ?>"><?=$kos['area']; ?>
                            </option>
                            <option value="Kelurahan/Desa Silale">Kelurahan/Desa Silale</option>
                            <option value="Kelurahan/Desa Waihaong">Kelurahan/Desa Waihaong</option>
                            <option value="Kelurahan/Desa Halong ">Kelurahan/Desa Halong </option>
                            <option value="Kelurahan/Desa Lateri ">Kelurahan/Desa Lateri</option>
                            <option value="Kelurahan/Desa Latta">Kelurahan/Desa Latta</option>
                            <option value="Kelurahan/Desa Nania">Kelurahan/Desa Nania</option>
                            <option value="Kelurahan/Desa Negeri Lama">Kelurahan/Desa Negeri Lama</option>
                            <option value="Kelurahan/Desa Passo ">Kelurahan/Desa Passo</option>
                            <option value="Kelurahan/Desa Waiheru ">Kelurahan/Desa Waiheru</option>
                            <option value="Kelurahan/Desa Urimessing">Kelurahan/Desa Urimessing</option>
                            <option value="Kelurahan/Desa Mangga Dua">Kelurahan/Desa Mangga Dua</option>
                            <option value="Kelurahan/Desa Wainitu">Kelurahan/Desa Wainitu</option>
                            <option value="Kelurahan/Desa Kudamati">Kelurahan/Desa Kudamati</option>
                            <option value="Kelurahan/Desa Amahusu">Kelurahan/Desa Amahusu</option>
                            <option value="Kelurahan/Desa Benteng ">Kelurahan/Desa Benteng</option>
                            <option value="Kelurahan/Desa Latuhalat">Kelurahan/Desa Latuhalat</option>
                            <option value="Kelurahan/Desa Seilale">Kelurahan/Desa Seilale</option>
                            <option value="Kelurahan/Desa Karang Panjang">Kelurahan/Desa Karang Panjang</option>
                            <option value="Kelurahan/Desa Amantelu">Kelurahan/Desa Amantelu</option>
                            <option value="Kelurahan/Desa Rijali">Kelurahan/Desa Rijali</option>
                            <option value="Kelurahan/Desa Uritetu">Kelurahan/Desa Uritetu</option>
                            <option value="Kelurahan/Desa Batu Meja ">Kelurahan/Desa Batu Meja</option>
                            <option value="Kelurahan/Desa Honipopu">Kelurahan/Desa Honipopu</option>
                            <option value="Kelurahan/Desa Ahusen">Kelurahan/Desa Ahusen</option>
                            <option value="Kelurahan/Desa Batu Gaja">Kelurahan/Desa Batu Gaja</option>
                            <option value="Kelurahan/Desa Batu Merah">Kelurahan/Desa Batu Merah</option>
                            <option value="Kelurahan/Desa Galala">Kelurahan/Desa Galala</option>
                            <option value="Kelurahan/Desa Hative Kecil">Kelurahan/Desa Hative Kecil</option>
                            <option value="Kelurahan/Desa Pandan Kasturi">Kelurahan/Desa Pandan Kasturi</option>
                            <option value="Kelurahan/Desa Soya">Kelurahan/Desa Soya</option>
                            <option value="Kelurahan/Desa Waihoka">Kelurahan/Desa Waihoka</option>
                            <option value="Kelurahan/Desa Hunuth">Kelurahan/Desa Hunuth</option>
                            <option value="Kelurahan/Desa Poka">Kelurahan/Desa Poka</option>
                            <option value="Kelurahan/Desa Hative Besar">Kelurahan/Desa Hative Besar</option>
                            <option value="Kelurahan/Desa Rumah Tiga ">Kelurahan/Desa Rumah Tiga</option>
                            <option value="Kelurahan/Desa Wayame">Kelurahan/Desa Wayame</option>
                            <option value="Kelurahan/Desa Tawiri">Kelurahan/Desa Tawiri</option>
                            <option value="Kelurahan/Desa Laha">Kelurahan/Desa Laha</option>
                            <option value="Kelurahan/Desa Tihu">Kelurahan/Desa Tihu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fasilitas-kamar-mandi" class="col-sm-2 col-form-label">Fasilitas Kamar Mandi</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="fasilitas-kamar-mandi" name="fasilitas-kamar-mandi">
                            <option
                                value="<?=(old('fasilitas-kamar-mandi')) ? old('fasilitas-kamar-mandi') : $kos['fasilitas-kamar-mandi']; ?>">
                                <?=$kos['fasilitas-kamar-mandi']; ?></option>
                            <option value="Kamar Mandi Dalam">Kamar Mandi Dalam</option>
                            <option value="Kamar Mandi Luar">Kamar Mandi Luar</option>
                            <option value="Tidak Ada">Tidak Ada Kamar Mandi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fasilitas-internet" class="col-sm-2 col-form-label">Fasilitas Internet</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fasilitas-internet" name="fasilitas-internet"
                            value="<?=(old('fasilitas-internet')) ? old('fasilitas-internet') : $kos['fasilitas-internet']; ?>"">
                    </div>
                </div>
                <div class=" form-group row">
                        <label for="fasilitas-ac" class="col-sm-2 col-form-label">Fasilitas AC</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="fasilitas-ac" name="fasilitas-ac">
                                <option
                                    value="<?=(old('fasilitas-ac')) ? old('fasilitas-ac') : $kos['fasilitas-ac']; ?>">
                                    <?=$kos['fasilitas-ac']; ?></option>
                                <option value="Tersedia AC">Tersedia AC</option>
                                <option value="Tidak Tersedia AC">Tidak Tersedia AC</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas-lemari-es" class="col-sm-2 col-form-label">Fasilitas Lemari Es</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="fasilitas-lemari-es" name="fasilitas-lemari-es">
                                <option
                                    value="<?=(old('fasilitas-lemari-es')) ? old('fasilitas-lemari-es') : $kos['fasilitas-lemari-es']; ?>">
                                    <?=$kos['fasilitas-lemari-es']; ?></option>
                                <option value="Tersedia Lemari Es">Tersedia Lemari Es</option>
                                <option value="Tidak Tersedia Lemari Es">Tidak Tersedia Lemari Es</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas-tempat-tidur" class="col-sm-2 col-form-label">Fasilitas Tempat
                            Tidur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fasilitas-tempat-tidur"
                                name="fasilitas-tempat-tidur"
                                value="<?=(old('fasilitas-tempat-tidur')) ? old('fasilitas-tempat-tidur') : $kos['fasilitas-tempat-tidur']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas-tv" class="col-sm-2 col-form-label">Fasilitas TV</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="fasilitas-tv" name="fasilitas-tv">
                                <option
                                    value="<?=(old('fasilitas-tv')) ? old('fasilitas-tv') : $kos['fasilitas-tv']; ?>">
                                    <?=$kos['fasilitas-tv']; ?></option>
                                <option value="Tersedia TV">Tersedia TV</option>
                                <option value="Tidak Tersedia TV">Tidak Tersedia TV</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas-lemari-pakaian" class="col-sm-2 col-form-label">Fasilitas Lemari
                            Pakaian</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="fasilitas-lemari-pakaian" name="fasilitas-lemari-pakaian">
                                <option
                                    value="<?=(old('fasilitas-lemari-pakaian')) ? old('fasilitas-lemari-pakaian') : $kos['fasilitas-lemari-pakaian']; ?>">
                                    <?=$kos['fasilitas-lemari-pakaian']; ?></option>
                                <option value="Tersedia Lemari Pakaiana">Tersedia Lemari Pakaian</option>
                                <option value="Tidak Tersedia Lemari Pakaian">Tidak tersedia Lemari pakaian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas-tempat-jumuran" class="col-sm-2 col-form-label">Fasilitas Tempat
                            Jumuran</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="fasilitas-tempat-jumuran" name="fasilitas-tempat-jumuran">
                                <option
                                    value="<?=(old('fasilitas-tempat-jumuran')) ? old('fasilitas-tempat-jumuran') : $kos['fasilitas-tempat-jumuran']; ?>">
                                    <?=$kos['fasilitas-tempat-jumuran']; ?></option>
                                <option value="Tersedia Tempat jumuran">Tersedia Tempat Jumuran</option>
                                <option value="Tidak tersedia tempat jumuran">Tidak Tersedia Tempat Jumuran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis-kos" class="col-sm-2 col-form-label">Jenis Kos</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="jenis-kos" name="jenis-kos">
                                <option value="<?=(old('jenis-kos')) ? old('jenis-kos') : $kos['jenis-kos']; ?>">
                                    <?=$kos['jenis-kos']; ?></option>
                                <option value=" campuran">Campuran</option>
                                <option value="keluarga">Keluarga</option>
                                <option value="Putri">Putri</option>
                                <option value="Putra">Putra</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jam-bertemu" class="col-sm-2 col-form-label">Jam Bertemu</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="jam-bertemu" name="jam-bertemu">
                                <option value="<?=(old('jam-bertemu')) ? old('jam-bertemu') : $kos['jam-bertemu']; ?>">
                                    <?=$kos['jam-bertemu']; ?></option>
                                <option value="Dibatasi">Dibatasi</option>
                                <option value="Tidak dibatasi">Tidak dibatasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pemeliharaan-binatang" class="col-sm-2 col-form-label">Pemeliharaan Binatang</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="pemeliharaan-binatang" name="pemeliharaan-binatang">
                                <option
                                    value="<?=(old('pemeliharaan-binatang')) ? old('pemeliharaan-binatang') : $kos['pemeliharaan-binatang']; ?>">
                                    <?=$kos['pemeliharaan-binatang']; ?></option>
                                <option value=" Diijinkan">Diijinkan</option>
                                <option value="Tidak diijinkan">Tidak Diijinkan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="umur_bangunan" class="col-sm-2 col-form-label">Umur Bangunan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="umur_bangunan" name="umur_bangunan"
                                value="<?=(old('umur_bangunan')) ? old('umur_bangunan') : $kos['umur_bangunan']; ?>">
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                value="<?=(old('deskripsi')) ? old('deskripsi') : $kos['deskripsi']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
                            </div>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label">Upload Gambar</label>
                        <div class="col-sm-10">
                            <div class="custom-file mb-3">
                                <input type="file"
                                    class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>"
                                    id="gambar" name="gambar" onchange="viewImg()">
                                <label class="custom-file-label" for="gambar"><?= $kos['gambar']; ?></label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Ubah Data Kos</button>
                            <a href="/" class="btn btn-warning text-light">Batal</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>