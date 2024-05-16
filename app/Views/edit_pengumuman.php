<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pengumuman</title>
  
</head>
<body>

        <h1>Edit pengumuman</h1>

        <form action="<?= site_url('update_pengumuman/' . $pengumuman['id']); ?>" method="post">
           
        Judul :
                <input type="text" name="judul" value="<?= $pengumuman['judul']; ?>">
            <br>

            pengumuman :
            <textarea name="pengumuman" rows="4" cols="50">
            <?= $pengumuman['pengumuman']; ?>

</textarea>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
