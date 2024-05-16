<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
      color: #fff; 
    }
    .card {
      background-color: rgba(255, 255, 255, 0.8); 
      color: #000; 
    }
    .btn-warning {
      color: #fff; /* Ubah warna teks tombol "Ganti Password" menjadi putih */
    }
    .btn-warning:hover {
      color: #fff; /* Tetapkan warna teks tombol "Ganti Password" menjadi putih saat dihover */
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <a href="<?= site_url('admin/isi_berita') ?>" class="btn btn-primary">Isi Berita Baru</a>
    </div>
    <div class="col-md-6 text-right">
      <a href="<?= site_url('admin/ganti_password') ?>" class="btn btn-warning">Ganti Password</a> 
      <a href="<?= site_url('/logout') ?>" class="btn btn-danger">Logout</a>
    </div>
  </div>
  
  <hr>

  <?php foreach($berita as $key => $post) : ?>
    <div class="card my-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo $post['judul'] ?></h5>
        <p class="card-text"><?php echo $post['berita'] ?></p>
        <a href="<?= site_url('admin/edit_berita/' . $post['id']) ?>" class="btn btn-info">Verifikasi</a>
        <a href="<?= site_url('admin/delete_berita/' . $post['id']) ?>" class="btn btn-danger">Batal</a>
      </div>
    </div>
  <?php endforeach ?>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
