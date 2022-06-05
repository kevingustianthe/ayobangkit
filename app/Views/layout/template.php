<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Footer-->
    <footer class="py-5 mt-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; AyoBangkit 2022</p>
        </div>
    </footer>
    <script>
        function previewImage() {
            const gambar_produk = document.querySelector('#gambar_produk');
            const imgPreview = document.querySelector('.img_preview');

            const fileImage = new FileReader();
            fileImage.readAsDataURL(gambar_produk.files[0]);

            fileImage.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>