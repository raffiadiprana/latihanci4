<?php foreach($pengumuman as $key => $post) : ?>

<?php echo $post['judul'] ?>


<?php echo $post['pengumuman'] ?>

<a href="<?= site_url('edit_pengumuman/' . $post['id']) ?>" >Edit</a>
<a href="<?= site_url('delete_pengumuman/' . $post['id']) ?>" >Delete</a>

<br>



<?php endforeach ?>
