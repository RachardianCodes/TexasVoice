<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'akun';
    protected $primaryKey  = 'id_akun';
    protected $allowedFields  = [
        'nis', 'nama', 'tingkat', 'kelas', 'username', 'password', 'status', 'max_time', 'role'
    ];

    public function getAkun()
    {
        $builder = $this->db->table('akun');
        return $builder->get();
    }
    public function savePengguna($data)
    {
        $query = $this->db->table('akun')->insert($data);
        return $query;
    }
    public function updatePengguna($data, $nis)
    {
        $query = $this->db->table('akun')->update($data, array('nis' => $nis));
        return $query;
    }
    public function deletePengguna($nis)
    {
        $query = $this->db->table('akun')->delete(array('nis' => $nis));
        return $query;
    }
    public function getBelumVote()
    {
        $builder = $this->db->table('akun');
        $builder->where('status', 'Belum Vote');
        $builder->where('role', 'voter');
        return $builder->get();

        
    }
}
