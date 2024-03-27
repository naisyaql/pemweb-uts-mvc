<?php

class Order extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Order Page';
        $data['orders'] = $this->model('Order_model')->getDataOrder();

        $this->view('temp/header', $data);
        $this->view('order/index', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Order Page';

        $this->view('temp/header', $data);
        $this->view('order/tambah', $data);
    }
    
    public function tambahData(){
        if ($this->model('Order_model')->tambahDataOrder($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }

    public function editData(){
        if ($this->model('Order_model')->editDataOrder($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }

    public function ambilData(){
        echo json_encode($this->model('Order_model')->getEditDataOrder($_POST['order_id']));
    }

    public function deleteData($id){
        if ($this->model('Order_model')->deleteDataOrder($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }

    public function searching(){
        $data['judul'] = 'Order Page';
        $data['orders'] = $this->model('Order_model')->getDataOrderSearching($_POST['cari_kode']);
        $this->view('temp/header', $data);
        $this->view('order/index', $data);
    }
}

?>
