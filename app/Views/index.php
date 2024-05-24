<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landing Page</title>
    <link href="/css/bootstrap.old.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <!-- slider -->
    <link rel="stylesheet" href="/css/splide.min.css" />

    <style>
        .navigators {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand ms-md-5" href="/">
                <img src="/img/logo.jpg" alt="MindSpace" width="240" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav column-gap-3 me-md-4">
                    <li class="nav-item">
                        <a class="nav-link text-white active bg-blue fw-bold inline rounded" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary fw-bold" href="tentang-kami.html">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary fw-bold" href="artikel.html">ARTIKEL</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section id="hero" class="py-5" style="background-color: #f1f1f1">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-6 col-12">
                        <h1 class="text-blue fw-bold h2">
                            Bagaimana Perasaan Anda Hari Ini?
                        </h1>
                        <h1 class="text-black fw-bold h2">Mari Eksplorasi Emosi Anda</h1>
                        <p class="mt-4">
                            Di MindSpace, kami percaya bahwa kesehatan mental adalah kunci
                            untuk hidup yang lebih bahagia dan lebih memuaskan. Kami
                            berkomitmen untuk menyediakan ruang yang aman dan mendukung, di
                            mana Anda dapat menjelajahi pikiran Anda dan menemukan
                            keseimbangan. Bersama-sama, kita dapat bekerja menuju
                            kesejahteraan mental yang lebih baik, satu langkah pada satu
                            waktu.
                        </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="/img/hero-image.png" class="img-fluid" alt="hero image" />
                    </div>
                </div>
            </div>
        </section>

        <section id="tes-mental" class="py-5" style="background-color: #fafafa">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-blue text-center fw-bold">
                            Tes Kesehatan Mental
                        </h1>

                        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 mt-5">
                            <a href="form-1.html" style="text-decoration: none"></a>
                            <div onclick="onNavigate('burnout')" class="rounded d-flex flex-column justify-content-center align-items-center navigators" style="background-color: #13d726; width: 160px; height: 160px">
                                <img src="/img/Fire.png" class="img-fluid w-50" alt="mental test image" />
                                <span class="fw-bold text-white">Burnout</span>
                            </div>
                            <div onclick="onNavigate('depresion')" class="rounded d-flex flex-column justify-content-center align-items-center navigators" style="background-color: #4d7df0; width: 160px; height: 160px">
                                <img src="/img/Brain.png" class="img-fluid w-50" alt="mental test image" />
                                <span class="fw-bold text-white">Depresi</span>
                            </div>
                            <div onclick="onNavigate('stres')" class="rounded d-flex flex-column justify-content-center align-items-center navigators" style="background-color: #f04d4d; width: 160px; height: 160px">
                                <img src="/img/Distressed Woman.png" class="img-fluid w-50" alt="mental test image" />
                                <span class="fw-bold text-white">Stress</span>
                            </div>
                            <div class="rounded d-flex flex-column justify-content-center align-items-center navigators" style="background-color: #0ba448; width: 160px; height: 160px">
                                <img src="/img/Trust.png" class="img-fluid w-50" alt="mental test image" />
                                <span class="fw-bold text-white">Wellbeing </span>
                            </div>
                            <div onclick="onNavigate('anxiety')" class="rounded d-flex flex-column justify-content-center align-items-center navigators" style="background-color: #a80cc2; width: 160px; height: 160px">
                                <img src="/img/Fire.png" class="img-fluid w-50" alt="mental test image" />
                                <span class="fw-bold text-white">Kecemasan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="keunggulan" class="py-5" style="background-color: #ffff">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center gap-3">
                    <div class="col-12 mb-4">
                        <h1 class="text-blue text-center fw-bold">
                            Keunggulan Website Kami
                        </h1>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="bg-white d-flex flex-column justify-content-center align-items-center rounded py-5 px-3 text-center">
                            <img src="/img/keunggulan-icon (1).png" alt="keunggulan-icon" class="img-fluid" />
                            <h6 class="h6 text-capitalize mt-3">
                                tes kesehatan mental gratis
                            </h6>
                            <p>Cek kesehatan mental Anda secara gratis.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="bg-white d-flex flex-column justify-content-center align-items-center rounded py-5 px-3 text-center">
                            <img src="/img/keunggulan-icon (2).png" alt="keunggulan-icon" class="img-fluid" />
                            <h6 class="h6 text-capitalize mt-3">
                                Tampilan ui / ux yang friendly
                            </h6>
                            <p>Cek kesehatan mental Anda secara gratis.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="bg-white d-flex flex-column justify-content-center align-items-center rounded py-5 px-3 text-center">
                            <img src="/img/keunggulan-icon (3).png" alt="keunggulan-icon" class="img-fluid" />
                            <h6 class="h6 text-capitalize mt-3">
                                Artikel Psikolog Terupdate
                            </h6>
                            <p>Cek kesehatan mental Anda secara gratis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tentang-kami" class="py-5" style="background-color: #fafafa">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4 text-center">
                        <h1 class="text-blue fw-bold mb-5">Tentang Kami</h1>
                        <h4 class="h4 mt-4">Selamat Datang di</h4>
                        <h4 class="fw-bold text-blue h4 mb-3">MindSpace!</h4>
                        <p class="mt-5 fw-medium">
                            MindSpace adalah portal kesehatan mental berbasis website yang
                            didedikasikan untuk memberikan akses mudah ke layanan psikologi
                            berkualitas. Melalui Website ini, kami berkomitmen untuk
                            mendukung kesejahteraan mental komunitas Malang dengan
                            menyediakan platform yang informatif dan interaktif,
                            memungkinkan klien untuk menemukan sumber daya, informasi, dan
                            dukungan yang mereka butuhkan untuk perjalanan kesehatan mental
                            mereka.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="layanan-kami" class="py-5" style="background-color: #f1f1f1">
            <div class="container">
                <div class="row">
                    <div class="col-12 bg-blue p-5 text-center" style="border-radius: 70px">
                        <h1 class="text-white fw-bold mb-5">Layanan Kami</h1>
                        <p class="text-white">MindSpace siap untuk...</p>
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="d-flex flex-column justify-content-center align-items-center py-5 px-3 text-center text-white">
                                    <img src="/img/layanan (1).png" alt="layanan-icon" class="img-fluid" />
                                    <p>
                                        Menyediakan tes kesehatan mental online untuk mengevaluasi
                                        kesejahteraan mental mereka anda.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="d-flex flex-column justify-content-center align-items-center py-5 px-3 text-center text-white">
                                    <img src="/img/layanan (2).png" alt="layanan-icon" class="img-fluid" />
                                    <p>
                                        Artikel informatif yang membahas berbagai topik seputar
                                        kesehatan mental dan kesejahteraan psikologis.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="d-flex flex-column justify-content-center align-items-center py-5 px-3 text-center text-white">
                                    <img src="/img/layanan (3).png" alt="layanan-icon" class="img-fluid" />
                                    <p>
                                        Panduan praktis untuk meningkatkan kesehatan mental dan
                                        kesejahteraan diri.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="d-flex flex-column justify-content-center align-items-center py-5 px-3 text-center text-white">
                                    <img src="/img/layanan (4).png" alt="layanan-icon" class="img-fluid" />
                                    <p>Menjaga dan menjamin privasi dari anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="visi-misi" class="py-5" style="background-color: #f1f1f1">
            <div class="container">
                <h1 class="text-black fw-bold mb-5 text-center">
                    Visi dan Misi <span class="text-blue">MindSpace</span>
                </h1>
                <div class="row d-flex justify-content-evenly gap-3">
                    <div class="col-md-4 col-12 p-4" style="
                background-color: #7bdb30;
                border-radius: 25px;
                height: 200px;
              ">
                        <div class="d-flex justify-content-center" style="margin-top: -50px">
                            <h3 class="d-inline-flex bg-blue p-3 rounded text-white">
                                VISI
                            </h3>
                        </div>
                        <p class="text-center text-white mt-4 fw-medium">
                            Menjadi sumber daya utama dan terpercaya untuk peningkatan
                            kesehatan mental untuk membantu setiap individu
                        </p>
                    </div>
                    <div class="col-md-4 col-12 p-4 mt-md-0 mt-4" style="
                background-color: #7bdb30;
                border-radius: 25px;
                height: 200px;
              ">
                        <div class="d-flex justify-content-center" style="margin-top: -50px">
                            <h3 class="d-inline-flex bg-blue p-3 rounded text-white">
                                MISI
                            </h3>
                        </div>
                        <p class="text-center text-white mt-4 fw-medium">
                            Menjadikan layanan kesehatan mental yang berkualitas dapat
                            diakses oleh semua khalayak umum
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="rating" class="py-5">
            <div class="container">
                <h1 class="fw-bold mb-5 text-center" style="color: #feae0b">
                    Rating & Testimoni
                </h1>
                <div class="row mb-5">
                    <div class="splide" id="splide1" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="bg-white border border-secondary border-3 p-4" style="border-radius: 37px">
                                        <h5>Nama</h5>
                                        <img src="/img/star.png" alt="bintang" class="img-fluid" />
                                        <div class="d-flex align-items-center w-100">
                                            <img src="/img/Calendar.png" alt="kalender" class="img-fluid me-2" />
                                            <span class="my-auto">2 April 2024</span>
                                        </div>
                                        <p>
                                            presiden baik, mentri agamanya juga baik, istananya
                                            menjadi istana mewah
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="bg-white border border-secondary border-3 p-4" style="border-radius: 37px">
                                        <h5>Nama</h5>
                                        <img src="/img/star.png" alt="bintang" class="img-fluid" />
                                        <div class="d-flex align-items-center w-100">
                                            <img src="/img/Calendar.png" alt="kalender" class="img-fluid me-2" />
                                            <span class="my-auto">3 April 2024</span>
                                        </div>
                                        <p>
                                            presiden baik, mentri agamanya juga baik, istananya
                                            menjadi istana mewah
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="bg-white border border-secondary border-3 p-4" style="border-radius: 37px">
                                        <h5>Nama</h5>
                                        <img src="/img/star.png" alt="bintang" class="img-fluid" />
                                        <div class="d-flex align-items-center w-100">
                                            <img src="/img/Calendar.png" alt="kalender" class="img-fluid me-2" />
                                            <span class="my-auto">4 April 2024</span>
                                        </div>
                                        <p>
                                            presiden baik, mentri agamanya juga baik, istananya
                                            menjadi istana mewah
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="rounded-full text-white rounded-pill py-3 px-5 mt-5 fw-bold" style="background-color: #feae0b; text-decoration: none">
                        Beri Rating
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="pt-5 px-5" style="
        background-color: #f1f1f1;
        border-radius: 30px 30px 0;
        height: fit-content;
      ">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6 col-12" style="height: fit-content">
                    <img src="/img/logo-footer.png" class="img-fluid" alt="logo" />
                    <div class="d-flex">
                        <p style="color: #999999" class="w-50">
                            ruko griya mulyorejo, Jl. Raya Tebo Sel., Mulyorejo, Kec. Sukun,
                            Kota Malang, Jawa Timur 65147
                        </p>
                        <div class="d-flex flex-column">
                            <a href="#" style="text-decoration: none; color: #9e9e9e" class="fw-bold">
                                Layanan Konsumen
                            </a>
                            <a href="#" style="text-decoration: none; color: #9e9e9e" class="">
                                Hubungi Kami
                            </a>
                            <a href="#" style="text-decoration: none; color: #9e9e9e" class="">
                                FAQ’s
                            </a>
                        </div>
                    </div>
                    <p style="color: #999999" class="mb-5">
                        Email :
                        <span class="text-blue fw-semibold"> MindSpace@gmail.com </span>
                    </p>

                    <div class="mt-5">
                        <span class="fw-bold"> Follow us </span>
                        <div class="d-flex gap-2 mt-3">
                            <a href="#">
                                <img src="/img/sosmed (1).png" alt="facebook" class="img-fluid" />
                            </a>
                            <a href="#">
                                <img src="/img/sosmed (2).png" alt="instagram" class="img-fluid" />
                            </a>
                            <a href="#">
                                <img src="/img/sosmed (3).png" alt="linkedin" class="img-fluid" />
                            </a>
                            <a href="#">
                                <img src="/img/sosmed (4).png" alt="tiktok" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-end" style="height: 400px">
                    <img src="/img/footer-image.png" class="img-fluid" alt="image footer" />
                </div>
            </div>
            <div class="row border-top border-4">
                <span class="text-center mt-2 pb-2">
                    Copyright 2024 - MindSpace
                </span>
            </div>
        </div>
    </footer>

    <script src="/js/bootstrap.old.bundle.min.js"></script>

    <script src="/js/splide.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var splide1 = new Splide("#splide1", {
                type: "loop",
                // padding: '30px',
                perPage: 4,
                perMove: 1,
                drag: "free",
                autoScroll: {
                    speed: 1,
                },
                arrows: false,
                gap: "1rem",
                breakpoints: {
                    480: {
                        perPage: 1,
                        padding: "10px",
                        gap: ".2rem",
                        // height: '6rem',
                    },
                    640: {
                        perPage: 2,
                        // padding: '0',
                        gap: "20rem",
                        // height: '6rem',
                    },

                    768: {
                        perPage: 2,
                        padding: "30px",
                        gap: "10rem",
                        // height: '6rem',
                    },
                    1024: {
                        perPage: 3,
                        padding: "30px",
                        gap: "4rem",
                        // height: '6rem',
                    },
                },
            });
            splide1.mount();
        });

        function onNavigate(resource) {
            window.location.href = "/test/" + resource;
        }
    </script>
</body>

</html>