<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KostData extends Migration
{
    public function up()
    {
            $this->forge->addField([
                    'id'=> [
                            'type'           => 'INT',
                            'constraint'     => 11,
                            'unsigned'       => true,
                            'auto_increment' => true,
                    ],
                    'slug'          => [
                            'type'=> 'VARCHAR',
                            'constraint' => '255',
                    ],
                    'judul'       => [
                            'type'       => 'VARCHAR',
                            'constraint' => '255',
                    ],
                    'harga'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '30',
                     ],
                     'kota'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'kecamatan'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'alamat'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'area'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-kamar-mandi'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-internet'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-ac'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-lemari-es'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-tempat-tidur'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-tv'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-lemari-pakaian'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'fasilitas-tempat-jumuran'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'jenis-kos'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'jam-bertemu'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'pemeliharaan-binatang'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'umur_bangunan'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                    'deskripsi' => [
                            'type' => 'TEXT',
                            'null' => true,
                    ],
                    'gambar'  => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                     ],
                     'created_at'  => [
                        'type'  => 'DATETIME',
                        'null'     => true,
                     ],
                     'updated_at'  => [
                        'type'  => 'DATETIME',
                        'null'     => true,
                     ],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('kost_data');
    }

    public function down()
    {
            $this->forge->dropTable('kost_data');
    }
}