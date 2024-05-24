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

    <main class="container" style="padding-left: 70px; padding-right: 70px;">
        <h1 class="text-center mb-6" style="color: #2FA3F8; margin-top: 40px; font-weight: bold;">Artikel Psikologi</h1>

        <div class="row gx-5 gy-4" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-4">
                <div class="card">
                    <img style="height: 50%;" src="https://media.licdn.com/dms/image/C4D12AQHgN_BrypwwxQ/article-cover_image-shrink_600_2000/0/1614613421668?e=2147483647&v=beta&t=z6ivJgWC26-MVB7VDmbr0M-nAXXO5SkXsbbJ7tYfi7c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span style="font-size: 14px;">By Mindspace</span> | <span style="font-size: 14px;"><?= date("D, M Y") ?></span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://media.licdn.com/dms/image/C4D12AQHgN_BrypwwxQ/article-cover_image-shrink_600_2000/0/1614613421668?e=2147483647&v=beta&t=z6ivJgWC26-MVB7VDmbr0M-nAXXO5SkXsbbJ7tYfi7c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span style="font-size: 14px;">By Mindspace</span> | <span style="font-size: 14px;"><?= date("D, M Y") ?></span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://media.licdn.com/dms/image/C4D12AQHgN_BrypwwxQ/article-cover_image-shrink_600_2000/0/1614613421668?e=2147483647&v=beta&t=z6ivJgWC26-MVB7VDmbr0M-nAXXO5SkXsbbJ7tYfi7c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span style="font-size: 14px;">By Mindspace</span> | <span style="font-size: 14px;"><?= date("D, M Y") ?></span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://media.licdn.com/dms/image/C4D12AQHgN_BrypwwxQ/article-cover_image-shrink_600_2000/0/1614613421668?e=2147483647&v=beta&t=z6ivJgWC26-MVB7VDmbr0M-nAXXO5SkXsbbJ7tYfi7c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span style="font-size: 14px;">By Mindspace</span> | <span style="font-size: 14px;"><?= date("D, M Y") ?></span>
                    </div>
                </div>
            </div>
        </div>
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
    </script>
</body>

</html>