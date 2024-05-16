<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
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
        .container {
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

<div class="container mt-4">
    <h1>Edit Berita</h1>
    <form action="<?= site_url('admin/update_berita/' . $berita['id']); ?>" method="post">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" value="<?= $berita['judul']; ?>">
        </div>
        <div class="form-group">
            <label for="berita">Berita:</label>
            <textarea name="berita" class="form-control" rows="4"><?= $berita['berita']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
