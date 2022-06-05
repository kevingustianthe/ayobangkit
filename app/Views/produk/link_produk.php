<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $produk['gambar_produk']; ?>" alt="..." /></div>
            <div class="col-md-6">
                <h1 class="display-6 fw-bolder"><?= $produk['nama_produk']; ?></h1>
                <div class="fs-5 mb-5">
                    <p>Rp<?= $produk['harga_produk']; ?></p>
                </div>
                <p class="lead"><?= $produk['deskripsi_produk']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
            <?php foreach ($produk_user as $p_u) : ?>
                <?php if ($p_u['product_id'] != $produk['product_id']) : ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?= $p_u['gambar_produk']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <a class="text-decoration-none link-dark stretched-link" href="/produk_umkm/<?= $p_u['product_id']; ?>">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $p_u['nama_produk']; ?></h5>
                                        <!-- Product price-->
                                        <p class="fs-5">Rp<?= $p_u['harga_produk']; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>