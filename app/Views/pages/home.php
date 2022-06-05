<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header-->
<header class="bg-dark py-5 mt-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Halo, <?= session()->get('username'); ?></h1>
                    <p class="lead fw-normal text-white-50 mb-4">Bingung ingin mencari produk atau kerja setelah masa pandemi ini? Atau bingung dimana ingin menjual produk anda dan juga ingin mencari pegawai baru? AyoBangkit adalah solusinya!</p>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="logo.png" /></div>
        </div>
    </div>
</header>

<!-- Produk UMKM section-->
<section class="pt-5">
    <div class="container px-5 mt-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Produk UMKM</h2>
                    <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                </div>
            </div>
        </div>
        <?php
        $n = 3;
        $x = count($produk);
        if ($x < $n) {
            $n = $x;
        }
        ?>
        <div class="row gx-5">
            <?php for ($i = 0; $i < $n; $i++) : ?>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="<?= $produk[$i]['gambar_produk']; ?>" alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="/produk_umkm/<?= $produk[$i]['product_id']; ?>">
                                <h5 class="card-title mb-3"><?= $produk[$i]['nama_produk']; ?></h5>
                                <p class="fs-5">Rp<?= $produk[$i]['harga_produk']; ?></p>
                            </a>
                            <p class="card-text mb-0"><?= $produk[$i]['deskripsi_produk']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Lowongan Kerja section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Lowongan Kerja</h2>
                    <p class="lead fw-normal text-muted mb-5">Coming Soon</p>
                </div>
            </div>
        </div>

        <div class="row gx-5">
            <?php for ($i = 0; $i < $n; $i++) : ?>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="#!">
                                <h5 class="card-title mb-3">Lowongan</h5>
                            </a>
                            <p class="card-text mb-0">Coming Soon</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>