<?= $this->extend('layouts/template.php'); ?>



<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <h1 class="my-5 text-center">Contact</h1>
            <form>
                <div class="form-group">
                    <label for="username">Nama Anda</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Anda </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="tanya">isi Pernyataan anda....</label>
                    <input type="text" class="form-control" id="tanya">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Anda Yakin</label>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>