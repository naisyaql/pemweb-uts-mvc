<?php

class Kategori extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman Kategori';
        $data['kategori'] = $this->model('Kategori_model')->getDataKategori();

        $this->view('temp/header', $data);
        $this->view('kategori/index', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman Kategori';

        $this->view('temp/header', $data);
        $this->view('kategori/tambah', $data);
    }
    
    public function tambahData(){
        if ($this->model('Kategori_model')->tambahDataKategori($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }

    // Pakain Halaman
    public function edit($id) 
    {
        $data['judul'] = 'Halaman Kategori';
        $data['kategori'] = $this->model('Kategori_model')->getEditDataKategori($id);
        

        $this->view('temp/header', $data);
        $this->view('kategori/edit', $data);
    }

    public function editData(){
        if ($this->model('Kategori_model')->editDataKategori($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }
    public function deleteData($id){
        if ($this->model('Kategori_model')->deleteDataKategori($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }

}

?>