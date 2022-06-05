<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header-->
<header class="bg-dark py-5 mt-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Produk UMKM</h1>
            <p class="lead fw-normal text-white-50 mb-0">Promosikan produk UMKM milikmu sekarang juga</p>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
            <?php foreach ($produk as $p) : ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= $p['gambar_produk']; ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-title mt-4 mb-2">
                            <div class="text-center">
                                <a class="text-decoration-none link-dark stretched-link" href="/produk_umkm/<?= $p['product_id']; ?>">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $p['nama_produk']; ?></h5>
                                    <!-- Product price-->
                                    <p class="fs-5">Rp<?= $p['harga_produk']; ?></p>
                                </a>
                            </div>
                        </div>
                        <!-- Product info-->
                        <div class="card-body p-4 pt-0 border-top-0 bg-transparent">
                            <p class="text-start"><?= $p['deskripsi_produk']; ?></p>
                            <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>