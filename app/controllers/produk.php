<?php

class Produk extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman Produk';
        $data['produk'] = $this->model('Produk_model')->getDataProduk(); // Fetch product data from model

        $this->view('temp/header', $data); // Load header view
        $this->view('produk/index', $data); // Load product index view
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman Produk';

        $this->view('temp/header', $data); // Load header view
        $this->view('produk/tambah', $data); // Load product addition view
    }
    
    public function tambahData(){
        if ($this->model('Produk_model')->tambahDataProduk($_POST) > 0) { // Add product data to database
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/produk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/produk');
            exit;
        }
    }

    public function editData(){
        if ($this->model('Produk_model')->editDataProduk($_POST) > 0) { // Edit product data in the database
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/produk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/produk');
            exit;
        }
    }

    public function ambilData(){
        echo json_encode($this->model('Produk_model')->getEditDataProduk($_POST['id_produk'])); // Get product data for editing
    }

    public function deleteData($id){
        if ($this->model('Produk_model')->deleteDataProduk($id) > 0) { // Delete product data from database
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/produk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/produk');
            exit;
        }
    }

    public function searching(){
        $data['judul'] = 'Halaman Produk';
        $data['produk'] = $this->model('Produk_model')->getDataProdukSearching($_POST['cari_judul']); // Search for product data

        $this->view('temp/header', $data); // Load header view
        $this->view('produk/index', $data); // Load product index view
    }
}


?>