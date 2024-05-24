<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="/css/bootstrap.old.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <!-- slider -->
    <link rel="stylesheet" href="/css/splide.min.css">
</head>

<body>
    <main class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center" style="color: #2FA3F8; margin-bottom: 20px;">
                Tes Kesehatan Mental
            </h1>
            <h3 class="fw-bold text-center" style="color: #315B9C;">
                Terimakasih telah menggunakan layanan kami
            </h3>

            <div style="display: flex; align-items: center; justify-content: center;">
                <div class="p-4 bg-light rounded" style="margin-top: 50px; max-width: 70%;">
                    <p class="text-center mb-6">
                        <?php if ($score <= 9) : ?>
                            Selamat, tingkat <?= $test_for ?> mu masih dalam level <?= $level ?>! Namun, jangan anggap remeh hal ini. Tetap monitor kesehatan mentalmu agar tidak semakin parah.
                        <?php elseif ($score <= 17) : ?>
                            Anda sedang mengalami <?= $test_for ?> yang masih termasuk ke dalam kategori <?= $level ?>. Walaupun ini berarti Anda masih mampu mengendalikan <?= $test_for ?> Anda, namun Anda tetap perlu waspada dalam mengontrol emosi Anda agar kecemasan tidak meningkat.
                        <?php else : ?>
                            Waspada! Tingkat <?= $test_for ?> yang Anda alami saat ini termasuk dalam kategori <?= $level ?>. Ada baiknya untuk segera berkonsultasi dengan Psikolog yang akan membantu untuk meregulasi tingkat <?= $test_for ?> Anda sebelum berimbas ke keberfungsian Anda sehari-hari.
                        <?php endif; ?>
                    </p>
                    <p class="text-center">
                        "Terima kasih telah meluangkan waktu untuk menyelesaikan tes kesehatan mental ini. Kesejahteraan Anda sangat penting bagi kami. Ingatlah, Anda tidak sendirian, dan kami di sini untuk membantu Anda dalam setiap langkah perjalanan Anda menuju kesehatan mental yang lebih baik."
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="pt-5 px-5" style="background-color: #F1F1F1; border-radius: 30px 30px 0; height: fit-content;">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6 col-12" style="height: fit-content;">
                    <img src="/img/logo-footer.png" class="img-fluid" alt="logo">
                    <div class="d-flex">
                        <p style="color: #999999;" class="w-50">
                            ruko griya mulyorejo, Jl. Raya Tebo Sel., Mulyorejo, Kec. Sukun, Kota Malang, Jawa Timur
                            65147
                        </p>
                        <div class="d-flex flex-column">
                            <a href="#" style="text-decoration: none;color: #9E9E9E;" class="fw-bold">
                                Layanan Konsumen
                            </a>
                            <a href="#" style="text-decoration: none;color: #9E9E9E;" class="">
                                Hubungi Kami
                            </a>
                            <a href="#" style="text-decoration: none;color: #9E9E9E;" class="">
                                FAQ’s
                            </a>
                        </div>
                    </div>
                    <p style="color: #999999;" class="mb-5">
                        Email : <span class="text-blue fw-semibold">
                            MindSpace@gmail.com
                        </span>
                    </p>

                    <div class="mt-5">
                        <span class="fw-bold">
                            Follow us
                        </span>
                        <div class="d-flex gap-2 mt-3">
                            <a href="#">
                                <img src="/img/sosmed (1).png" alt="facebook" class="img-fluid">
                            </a>
                            <a href="#">
                                <img src="/img/sosmed (2).png" alt="instagram" class="img-fluid">
                            </a>
                            <a href="#">
                                <img src="/img/sosmed (3).png" alt="linkedin" class="img-fluid">
                            </a>
                            <a href="#">
                                <img src="/img/sosmed (4).png" alt="tiktok" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-end" style="height: 400px;">
                    <img src="/img/footer-image.png" class="img-fluid" alt="image footer">
                </div>
            </div>
            <div class="row  border-top border-4">
                <span class="text-center mt-2 pb-2">
                    Copyright 2024 - MindSpace
                </span>
            </div>
        </div>
    </footer>

    <script src="/js/bootstrap.old.bundle.min.js">
    </script>

</body>

</html>