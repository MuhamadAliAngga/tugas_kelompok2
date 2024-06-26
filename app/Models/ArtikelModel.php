<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_profil', 'judul', 'thumbnail', 'ringkasan', 'isi', 'tanggal_dibuat'];

    public function getArtikels()
    {
        $profil = session()->get('profil');
        $builder = $this->db->table('artikel');
        $builder->join('profil', 'artikel.id_profil = profil.id_profil');
        $query = $builder->getWhere(['profil.id_profil' => $profil['id_profil']]);

        return $query->getResult();
    }
    public function getAllArtikels()
    {
        $builder = $this->db->table('artikel');
        $builder->join('profil', 'artikel.id_profil = profil.id_profil');
        $query = $builder->get();

        return $query->getResult();
    }

    public function readArtikel()
    {
        return $this->join('profil', 'artikel.id_profil = profil.id_profil')
            ->select('artikel.*, profil.*');
    }
}
