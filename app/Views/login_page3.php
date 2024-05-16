<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?technology');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            color: #000; /* Ubah warna teks menjadi hitam */
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            margin: auto; /* Tengahkan layout */
            margin-top: 100px; /* Menambahkan jarak atas dari atas halaman */
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 15px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group a {
            color: #000; /* Ubah warna teks tombol menjadi hitam */
            text-decoration: none;
            margin-right: 10px;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Login</h5>
        </div>
        <div class="card-body">
            <form action="<?= site_url('login'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input name="username" id="username" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
                <div class="form-group text-center"> 
                    <a href="<?= site_url('register_user') ?>" class="btn btn-link">REGISTRASI USER BARU</a>
                    <a href="<?= site_url('lupa_password') ?>" class="btn btn-link">LUPA PASSWORD</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
