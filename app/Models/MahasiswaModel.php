<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nim', 'nama', 'prodi'];

    protected $returnType    = 'array';
    protected $useTimestamps = false;

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->find($id);
    }
}