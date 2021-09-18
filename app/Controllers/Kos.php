<?php

namespace App\Controllers;

use App\Models\KosModel;

class Kos extends BaseController
{
    public function __construct()
    {  
        $this->kosModel = new KosModel();
    }


    public function index()
    {
        $kos = $this->kosModel->getKos();

        $data = [
            'linkCss' => './assets/css/style.css',
            'title'=>'home',
            'kos'=> $kos 
        ];

        return view('pages/home', $data);

    }

    public function about() 
    {
        $data = [
            'linkCss' => './assets/css/style.css',
            'title'=>'about'
        ];

       return view('pages/about', $data );
    }

    public function contact() 
    {
        $data = [
            'linkCss' => './assets/css/style.css',
            'title'=>'contact'
        ];

       return view('pages/contact', $data );
    }

    public function createDataKos()
    {
        $data = [
            'linkCss' => './assets/css/style.css',
            'title' => 'Tambah Data',
            'validation' =>\Config\Services::validation()
        ];
        return view('pages/createDataKos', $data);
    }

    public function detail($slug)
    {
         $kos = $this->kosModel->getKos($slug);
         $data = [
            'linkCss' => './assets/css/style.css',
             'title'=> 'Detail kos',
             'kos'=>$kos
         ];

         if(empty($data['kos'])){
             throw new \CodeIgniter\Exceptions\PageNotFoundException('judul'. $slug. 'Tidak ditemukan');
         }

         
        return view('/pages/detail', $data);
    }

    public function save()
    {
        //validasi inputan data
        if(!$this->validate([
            'judul'=>[
                'rules'=> 'required|is_unique[kost_data.judul]',
                'errors' => [
                    'required' =>'{field} Kos harus diisi',
                    'is_unique'=>'{field} kos sudah terdaftar'
                ]
            ],
            'harga'=>[
                'rules'=> 'required',
                'errors' => [
                    'required' =>'{field} Kos harus diisi',
                ]
            ],
            'deskripsi'=>[
                'rules'=> 'required',
                'errors' => [
                    'required' =>'{field} Kos harus diisi',
                ]
            ],
            'alamat'=>[
                'rules'=> 'required',
                'errors' => [
                    'required' =>'{field} Kos harus diisi',
                ]
            ],
            'gambar'=> [
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]}|is_image[gambar]',
                'errors'=>[
                    'uploaded'=>'Gambar harus dipilih',
                    'max_size'=>'Ukuran gambar 1mb',
                    'is_image'=> 'File harus jpeg / jpg / png',
                ]
            ]
        ])){
            return redirect()->to('kos/createDataKos')->withInput();
        }
            //kelola gambar
            //ambil gambar dari request
            $fileGambar = $this->request->getFile('gambar');

            // pindahkan file ke img
            $fileGambar->move('img/img-data');
            // Ambil nama gambar
            $namaGambar = $fileGambar->getName();
            
        $slug = url_title($this->request->getVar('judul'), '-', true);

       $this->kosModel->save([
            'slug'=>$slug,
            'judul'=>$this->request->getVar('judul'),
            'harga'=>$this->request->getVar('harga'),
            'kota'=>$this->request->getVar('kota'),
            'kecamatan'=>$this->request->getVar('kecamatan'),
            'alamat'=>$this->request->getVar('alamat'),
            'area'=>$this->request->getVar('area'),
            'fasilitas-kamar-mandi' => $this->request->getVar('fasilitas-kamar-mandi'),
            'fasilitas-internet' => $this->request->getVar('fasilitas-internet'),
            'fasilitas-ac' => $this->request->getVar('fasilitas-ac'),
            'fasilitas-lemari-es' => $this->request->getVar('fasilitas-lemari-es'),
            'fasilitas-tempat-tidur' => $this->request->getVar('fasilitas-tempat-tidur'),
            'fasilitas-tv' => $this->request->getVar('fasilitas-tv'),
            'fasilitas-lemari-pakaian' => $this->request->getVar('fasilitas-lemari-pakaian'),
            'fasilitas-tempat-jumuran' => $this->request->getVar('fasilitas-tempat-jumuran'),
            'jenis-kos' => $this->request->getVar('jenis-kos'),
            'jam-bertemu' => $this->request->getVar('jam-bertemu'),
            'pemeliharaan-binatang' => $this->request->getVar('pemeliharaan-binatang'),
            'umur_bangunan' => $this->request->getVar('umur_bangunan'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namaGambar
       ]);

       session()->setFlashdata('pesan','Data berhasil ditambahkan!');
       
      return redirect()->to('/kos');
    }
    public function delete($id)
    {
        //cari gambar berdasarkan id
        $kos = $this->kosModel->find($id);

        //hapus gambar
        unlink('img/img-data/'.$kos['gambar']);

        $this->kosModel->delete($id);

        session()->setFlashdata('pesan','Data berhasil didihapus');
        return redirect()->to('/kos');

        
    }

    public function editDataKos($slug)
    {
        $data = [
            'linkCss' => './assets/css/style.css',
            'title' => 'Ubah data',
            'validation' =>\Config\Services::validation(),
            'kos'=>$this->kosModel->getKos($slug)
        ];
        return view('pages/editDataKos', $data);
    }

    public function update($id)
    {
        $kosLama = $this->kosModel->getKos($this->request->getVar('slug'));
        
        if($kosLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|is_unique[kost_data.judul]';
        }
        //validasi inputan data
        if(!$this->validate([
            'judul'=>[
                'rules'=> $rule_judul,
                'errors' => [
                    'required' =>'{field} Kos harus diisi',
                    'is_unique'=>'{field} kos sudah terdaftar'
                ]
            ],
            'gambar'=> [
                'rules' => 'max_size[gambar,1024]}|is_image[gambar]',
                'errors'=>[
                    'max_size'=>'Ukuran gambar 1mb',
                   'is_image'=> 'File harus jpeg / jpg / png',
                    ]
                ]
        ])){
            return redirect()->to('kos/editDataKos/'.$this->request->getVar('slug'))->withInput();
        }
        
        $fileGambar = $this->request->getFile('gambar');

        // cek apakah gambar yang lama atau sudah diganti
        if($fileGambar->getError() == 4){
            $namaGambar = $this->request->getVar('gambarLama');
        }else{
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();

            // pindahkan ke img
            $fileGambar->move('img/img-data/', $namaGambar);
            
            //hapus gambar lama
            unlink('img/img-data/'. $this->request->getVar('gambarLama'));
        }
    
        
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->kosModel->save([
            'id'=>$id,
             'slug'=>$slug,
             'judul'=>$this->request->getVar('judul'),
             'harga'=>$this->request->getVar('harga'),
             'kota'=>$this->request->getVar('kota'),
             'kecamatan'=>$this->request->getVar('kecamatan'),
             'alamat'=>$this->request->getVar('alamat'),
             'area'=>$this->request->getVar('area'),
             'fasilitas-kamar-mandi' => $this->request->getVar('fasilitas-kamar-mandi'),
             'fasilitas-internet' => $this->request->getVar('fasilitas-internet'),
             'fasilitas-ac' => $this->request->getVar('fasilitas-ac'),
             'fasilitas-lemari-es' => $this->request->getVar('fasilitas-lemari-es'),
             'fasilitas-tempat-tidur' => $this->request->getVar('fasilitas-tempat-tidur'),
             'fasilitas-tv' => $this->request->getVar('fasilitas-tv'),
             'fasilitas-lemari-pakaian' => $this->request->getVar('fasilitas-lemari-pakaian'),
             'fasilitas-tempat-jumuran' => $this->request->getVar('fasilitas-tempat-jumuran'),
             'jenis-kos' => $this->request->getVar('jenis-kos'),
             'jam-bertemu' => $this->request->getVar('jam-bertemu'),
             'pemeliharaan-binatang' => $this->request->getVar('pemeliharaan-binatang'),
             'umur_bangunan' => $this->request->getVar('umur_bangunan'),
             'deskripsi'=>$this->request->getVar('deskripsi'),
             'gambar' => $namaGambar
        ]);
 
        session()->setFlashdata('pesan','Data berhasil diubah');
        
       return redirect()->to('/kos');
    }
}