<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header-->
<header class="bg-dark py-5 mt-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Tambah Data Produk</h1>
        </div>
    </div>
</header>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="/produk/simpan_data" method="POST" enctype="multipart/form-data" class="px-5">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga Produk</label>
                    <input type="text" class="form-control" id="harga_produk" name="harga_produk" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                    <!-- <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk" placeholder="Deskripsi produk"> -->
                    <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                    <div class="col-sm-5 mb-2">
                        <img src="/img/default.jpg" class="img_thumbnail img_preview" width="360" height="210">
                    </div>
                    <input class="form-control" type="file" id="gambar_produk" name="gambar_produk" onchange="previewImage()" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>