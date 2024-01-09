<?php

namespace App\Models;

use CodeIgniter\Model;

class VoteModel extends Model
{
    protected $table            = 'log_voters';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_akun', 'id_kandidat', 'value'];

    public function saveVote($id_kandidat, $id_akun)
    {
        // Simpan pemilihan ke database
        $data = array(
            'id_kandidat' => $id_kandidat,
            'id_akun' => $id_akun,
            'value' => 1,
        );
        // $this->db->insert('log_voters', $data);
        $query = $this->db->table('log_voters')->insert($data);
        return $query;
    }
    public function getVote()
    {
        $builder = $this->db->table('log_voters');
        return $builder->get();
    }
    public function getVoteResults()
    {
        $builder = $this->db->table('log_voters');
        $builder->select('log_voters.id, log_voters.id_akun, kandidat.nama, SUM(log_voters.value) as total_value');
        $builder->join('kandidat', 'kandidat.id_kandidat = log_voters.id_kandidat');
        $builder->groupBy('log_voters.id_kandidat');
        $result = $builder->get()->getResult();
        return $result;

        // $builder = $this->db->table('tb_user');
        // $builder->select('*');
        // $builder->join('tb_outlet', 'tb_outlet.id_outlet=tb_user.id_outlet', 'left');
        // return $builder->get();
    }
    
}
