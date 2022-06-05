<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header-->
<header class="bg-dark py-5 mt-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="text-white fw-bolder mb-3">AyoBangkit</h1>
                    <p class="lead fw-normal text-muted mb-4">Website ini merupakan sebuah layanan pembantu masyarakat pelaku UMKM yang terdampak akibat pandemi untuk memasarkan produknya secara digital. Selain bermanfaat bagi pelaku UMKM, Website ini juga memiliki dampak yang cukup besar bagi masyarakat umum, seperti layanan pembantu pencari pekerjaan dan kegiatan-kegiatan yang terjadi di masyarakat.</p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Latar Belakang</h2>
                <p class="lead fw-normal text-muted mb-0">Terinspirasi oleh pandemi yang membuat banyak orang kehilangan pekerjaan, dan juga bisnis UMKM yang buntu.</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Tujuan</h2>
                <p class="lead fw-normal text-muted mb-0">Mempermudahkan para pelaku UMKM dalam mempromosikan produknya dan memudahkan para pencari kerja dalam mendapatkan informasi lowongan pekerjaan</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Tim Kami</h2>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" />
                    <h5 class="fw-bolder">Ardella Malinda Sarastri</h5>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" />
                    <h5 class="fw-bolder">Rafiqi Yahya</h5>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" />
                    <h5 class="fw-bolder">Kevin Gustian The</h5>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" />
                    <h5 class="fw-bolder">Muhammad Iqbal Saputra</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>