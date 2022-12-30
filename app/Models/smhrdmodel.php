<?php

namespace App\Models;

use CodeIgniter\Model;

class smhrd extends Model
{
    protected $table            = 'suratmasuk';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $allowedFields    = ['kode', 'nama', 'tanggal'];
    protected $dateFormat    = 'datetime';
    protected $updatedField  = 'update_at';
}
