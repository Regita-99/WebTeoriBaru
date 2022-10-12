<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="row">
                            <div class="col-6">
                                <form action="<?= base_url('/create') ?>" method="post">

                                    <div class="mb-3">
                                        <label for="npm" class="form-label">NPM</label>
                                        <input class="form-control is-valid" type="text" name="npm" class="form-control" id="npm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat">
                                    </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection('content'); ?>