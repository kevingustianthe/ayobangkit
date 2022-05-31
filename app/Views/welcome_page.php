<!DOCTYPE html>
<html lang="en">

<head>
    <title>AyoBangkit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-3 bg-primary text-white text-center fixed-top">
        <h1>AyoBangkit</h1>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide p-5" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://bumninc.com/wp-content/uploads/2021/02/UKM.jpg" alt="UMKM" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="http://www.stikestelogorejo.ac.id/wp-content/uploads/2020/06/cover-lowongan-kerja-1024x576.png" alt="Lowongan Kerja" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://pontas.id/wp-content/uploads/2019/05/wonderful-indonesia.jpg" alt="Pariwisata" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container p-5 my-5 border bg-light text-dark">
        <h1>Produk UMKM</h1>
        <p>This container has a border and some extra padding and margins.</p>
    </div>
    <div class="container p-5 my-5 border bg-light text-dark">
        <h1>Lowongan Kerja</h1>
        <p>This container has a border and some extra padding and margins.</p>
    </div>
    <div class="container p-5 my-5 border bg-light text-dark">
        <h1>Pariwisata di Indonesia</h1>
        <p>This container has a border and some extra padding and margins.</p>
    </div>
</body>

</html>