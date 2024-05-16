<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
            margin: auto; 
            margin-top: 50px; 
        }
        .form-container h1 {
            color: #000; 
        }
        .form-container a {
            color: #fff; 
            text-decoration: none;
            margin-right: 10px;
        }
        .form-container a:hover {
            text-decoration: none; 
        }
        .btn-primary {
            color: #000; 
        }
        .btn-primary:hover {
            color: #fff; 
        }
        .btn-warning {
            color: #fff; 
            border-color: #ffc107; 
        }
        .btn-warning:hover {
            color: #fff; 
            background-color: #ffc107; 
            filter: brightness(93%); 
        }
        .btn-danger {
            color: #fff; 
        }
        .btn-danger:hover {
            color: #fff; 
        }
        .btn-white {
            color: #fff !important; 
        }
    </style>
</head>
<body>

<div class="container form-container">
    <a href="<?= site_url('admin') ?>" class="btn btn-warning btn-white">Kembali ke Beranda</a>
    <a href="<?= site_url('/logout') ?>" class="btn btn-danger btn-white">Logout</a>

    <h1>Change Password for <?= esc($user['username']) ?></h1>
    <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('message')):?>
        <div style="color: green;">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('admin/proses_ganti_password'); ?>" method="post">
        <input type="hidden" name="username" value="<?= esc($user['username']) ?>" >
        <div class="form-group">
            <label for="current_password">Current Password:</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-white">Change Password</button>
    </form>
</div>


