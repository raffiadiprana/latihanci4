<?php 


namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'berita'];

}
