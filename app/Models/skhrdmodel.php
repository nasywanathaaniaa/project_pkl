<?php

namespace App\Models;

use CodeIgniter\Model;

class Absen extends Model
{
    protected $table            = 'arsipsuratpkl';
    protected $primaryKey       = 'kode_skeluar';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [, 'nama_skeluar', 'tanggal_skeluar'];
}
