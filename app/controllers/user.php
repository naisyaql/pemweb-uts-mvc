<?php

class User extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman User';
        $data['user'] = $this->model('User_model')->getDataUser(); // Mengambil data user dari model

        $this->view('temp/header', $data); // Memuat view header
        $this->view('user/index', $data); // Memuat view index user
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman User';

        $this->view('temp/header', $data); // Memuat view header
        $this->view('user/tambah', $data); // Memuat view tambah user
    }
    
    public function tambahData(){
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) { // Menambah data user ke dalam database
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function editData(){
        if ($this->model('User_model')->editDataUser($_POST) > 0) { // Mengubah data user dalam database
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function ambilData(){
        echo json_encode($this->model('User_model')->getEditDataUser($_POST['id_user'])); // Mendapatkan data user untuk pengeditan
    }

    public function deleteData($id){
        if ($this->model('User_model')->deleteDataUser($id) > 0) { // Menghapus data user dari database
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function searching(){
        $data['judul'] = 'Halaman User';
        $data['user'] = $this->model('User_model')->getDataUserSearching($_POST['cari_nama']); // Mencari data user

        $this->view('temp/header', $data); // Memuat view header
        $this->view('user/index', $data); // Memuat view index user
    }
}

?>