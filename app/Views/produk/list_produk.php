<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header-->
<header class="bg-dark py-5 mt-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">List Produk</h1>
            <!-- <p class="lead fw-normal text-white-50 mb-0">Daftar produk UMKM milikmu</p> -->
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-3">
        <a href="/list_produk/tambah_data" class="btn btn-primary mb-2">Tambah Produk</a>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <?php if (count($produk) == 0) : ?>
            <div class="alert alert-warning mb-5" role="alert">
                <p class="fs-5">Belum ada produk yang dipromosikan.</p>
            </div>
        <?php endif; ?>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
            <?php foreach ($produk as $p) : ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= $p['gambar_produk']; ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $p['nama_produk']; ?></h5>
                                <!-- Product price-->
                                <p class="fs-5">Rp<?= $p['harga_produk']; ?></p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent d-flex justify-content-center">
                            <a href="/list_produk/edit_data/<?= $p['product_id']; ?>" class="btn btn-success btn-sm mx-2">Edit</a>
                            <form action="/produk/hapus_data/<?= $p['product_id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm mx-2" onclick="return confirm(' Apakah Anda yakin mau menghapus <?= $p['nama_produk']; ?>?');">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>