<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table = 'tugas_isna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_tugas', 'deadline'];
}
