<?php

namespace App\Models;

use CodeIgniter\Model;

class KosModel extends Model
{
    protected $table      = 'kost_data';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['slug','judul','harga','kota','kecamatan', 'alamat', 'area','fasilitas-kamar-mandi', 'fasilitas-internet', 'fasilitas-ac', 'fasilitas-lemari-es', 'fasilitas-tempat-tidur', 'fasilitas-tv', 'fasilitas-lemari-pakaian', 'fasilitas-tempat-jumuran', 'jenis-kos', 'jam-bertemu', 'pemeliharaan-binatang', 'umur_bangunan', 'deskripsi', 'gambar'];


    public function getKos($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug'=>$slug])->first();
    }

}
