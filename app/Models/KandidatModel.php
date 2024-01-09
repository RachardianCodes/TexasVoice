<?php

namespace App\Models;

use CodeIgniter\Model;

class KandidatModel extends Model
{
    protected $table = 'kandidat';
    protected $primaryKey  = 'id_kandidat';
    protected $allowedFields  = [
        'nis', 'nama', 'visi', 'misi', 'foto'
    ];

    public function getKandidat()
    {
        $builder = $this->db->table('kandidat');
        return $builder->get();
    }
    public function saveKandidat($data)
    {
        $query = $this->db->table('kandidat')->insert($data);
        return $query;
    }
    public function updateKandidat($data, $id)
    {
        $query = $this->db->table('kandidat')->update($data, array('id_kandidat' => $id));
        return $query;
    }
    public function deleteKandidat($id)
    {
        $query = $this->db->table('kandidat')->delete(array('id_kandidat' => $id));
        return $query;
    }
}
