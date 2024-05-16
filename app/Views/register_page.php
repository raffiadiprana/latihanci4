<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User Baru</title>
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
            color: #000; 
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <h1 class="mb-4">Registrasi User Baru</h1>
    <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <form action="<?= site_url('proses_register_user'); ?>" method="post">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>


