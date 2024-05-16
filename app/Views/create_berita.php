<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Konsultasi</title>
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

<div class="form-container mx-auto"> 
    <h1 class="mb-4">Tambah Konsultasi</h1>
    <form action="<?= site_url('admin/berita_store'); ?>" method="post">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="berita">Isi Berita:</label>
            <textarea class="form-control" id="berita" name="berita" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
