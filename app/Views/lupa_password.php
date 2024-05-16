<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?password,technology'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            color: #000; 
        }
        .container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-control {
            margin-bottom: 20px;
        }
        .btn {
            background-color: #007bff; 
            color: #fff; 
            border: none;
        }
        .btn:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>

<div class="container">
    <a href="<?= site_url('login') ?>" class="btn btn-sm btn-link">LOGIN</a>
    <hr>

    <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('proses_lupa_password'); ?>" method="post">
        <div class="form-group">
            <label for="email">Email yang Terdaftar:</label>
            <input name="email" type="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-block">Reset Password</button>
    </form>
</div>
