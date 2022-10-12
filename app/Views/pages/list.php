<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<div class="p-4">
    <a href="/store" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">deskripsi</th>
                <th scope="col">Created_At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($kumpbaju as $kump) : ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $kump['npm'] ?></td>
                    <td><?= $kump['nama'] ?></td>
                    <td><?= $kump['alamat'] ?></td>
                    <td><?= $kump['deskripsi'] ?></td>
                    <td><?= $kump['created_at'] ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning me-3" href="/edit/<?= $kump['id'] ?>">Edit</a>
                            <form action="/delete/<?= $kump['id'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php $no++;
            endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('content'); ?>