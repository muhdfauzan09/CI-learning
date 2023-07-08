<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($komik as $data): ?>
                    <tr>
                        <th scope="row"><?= $data['id']; ?></th>
                        <td><img src="" alt=""></td>
                        <td><?= $data['name']; ?></td>
                        <td><a href="/komik/<?= $data['slug']; ?>" class="btn btn-success">Details</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>