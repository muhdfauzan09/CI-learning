<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h3 class="mt-5">Komik detail</h3>
    <div class="card mb-3 mt-5" style="max-width: 540px;">
        <div class="row g-0">
            <?php foreach($komik as $data) : ?>
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $data["name"]; ?></h5>
                    <p class="card-text"><b>Penulis : <?= $data['penulis']; ?></b></p>
                    <p class="card-text"><small class="text-muted"><?= $data['penerbit']; ?></p>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                    <br><br>
                    <a href="/komik">Back</a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>