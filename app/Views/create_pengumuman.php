<!DOCTYPE html>

<head>
  

</head>


<body>

  
        <h1>Tambah Konsultasi</h1>


        <form action="<?= site_url('pengumuman_store'); ?>" method="post">
           
            
              Judul :
                <input type="text" name="judul">
           
          Isi pengumuman :
                
          <textarea name="pengumuman" rows="4" cols="50">


          </textarea>
                <button type="submit">Simpan</button>
        </form>

</body>



</html>
