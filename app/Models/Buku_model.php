<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku_model extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit'
    ];
}