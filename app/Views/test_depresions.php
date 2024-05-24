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
    <form class="py-5" method="POST" action="/test/depresion">
        <div class="container">
            <h1 class="fw-bold text-center" style="color: #2FA3F8;">
                Tes Kesehatan Mental
            </h1>
            <h3 class="fw-bold text-center" style="color: #315B9C;">
                Apakah anda mengalami depresi?
            </h3>
            <p class="mt-4">
                Selama 2 minggu terakhir, seberapa sering Anda terganggu oleh masalah-masalah berikut?
            </p>
            <p class="mt-4 mb-5">
                Tunjukkan seberapa sering pernyataan-pernyataan berikut terjadi pada Anda. <span class="fw-bold">
                    Pilihlah 1 jawaban yang
                    paling sesuai
                </span> dengan
                diri Anda.
            </p>
            <div class="px-5 mb-4">
                <h6>Kekurangan minat atau antusiasme dalam melakukan apapun</h6>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="question-1" id="question-1-1" required>
                    <label class="form-check-label" for="question-1-1">tidak Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="question-1" id="question-1-2">
                    <label class="form-check-label" for="question-1-2">jarang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="question-1" id="question-1-3">
                    <label class="form-check-label" for="question-1-3">kadang-kadang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="question-1" id="question-1-4">
                    <label class="form-check-label" for="question-1-4">cukup sering</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="question-1" id="question-1-5">
                    <label class="form-check-label" for="question-1-5">sangat sering</label>
                </div>
            </div>
            <div class="px-5 mb-4">
                <h6>Merasa murung, muram, atau putus asa</h6>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="question-2" id="question-2-1" required>
                    <label class="form-check-label" for="question-2-1">tidak Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="question-2" id="question-2-2">
                    <label class="form-check-label" for="question-2-2">jarang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="question-2" id="question-2-3">
                    <label class="form-check-label" for="question-2-3">kadang-kadang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="question-2" id="question-2-4">
                    <label class="form-check-label" for="question-2-4">cukup sering</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="question-2" id="question-2-5">
                    <label class="form-check-label" for="question-2-5">sangat sering</label>
                </div>
            </div>
            <div class="px-5 mb-4">
                <h6>Merasa lelah atau kurang bertenaga</h6>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="question-3" id="question-3-1" required>
                    <label class="form-check-label" for="question-3-1">tidak Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="question-3" id="question-3-2">
                    <label class="form-check-label" for="question-3-2">jarang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="question-3" id="question-3-3">
                    <label class="form-check-label" for="question-3-3">kadang-kadang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="question-3" id="question-3-4">
                    <label class="form-check-label" for="question-3-4">cukup sering</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="question-3" id="question-3-5">
                    <label class="form-check-label" for="question-3-5">sangat sering</label>
                </div>
            </div>
            <div class="px-5 mb-4">
                <h6>Kurang percaya diri — atau merasa bahwa Anda adalah orang yang gagal atau telah mengecewakan diri sendiri atau keluarga</h6>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="question-4" id="question-4-1" required>
                    <label class="form-check-label" for="question-4-1">tidak Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="question-4" id="question-4-2">
                    <label class="form-check-label" for="question-4-2">jarang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="question-4" id="question-4-3">
                    <label class="form-check-label" for="question-4-3">kadang-kadang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="question-4" id="question-4-4">
                    <label class="form-check-label" for="question-4-4">cukup sering</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="question-4" id="question-4-5">
                    <label class="form-check-label" for="question-4-5">sangat sering</label>
                </div>
            </div>
            <div class="px-5 mb-4">
                <h6>Sulit berkonsentrasi pada sesuatu, misalnya membaca koran atau menonton televisi</h6>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="question-5" id="question-5-1" required>
                    <label class="form-check-label" for="question-5-1">tidak Pernah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="question-5" id="question-5-2">
                    <label class="form-check-label" for="question-5-2">jarang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="question-5" id="question-5-3">
                    <label class="form-check-label" for="question-5-3">kadang-kadang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="question-5" id="question-5-4">
                    <label class="form-check-label" for="question-5-4">cukup sering</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="question-5" id="question-5-5">
                    <label class="form-check-label" for="question-5-5">sangat sering</label>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="rounded-full text-white rounded-pill py-2 px-5 mt-5 fw-bold" style="background-color: #315B9C; text-decoration: none;">
                    Lihat Hasil
                </button>
            </div>
        </div>
    </form>

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