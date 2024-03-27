<?php

class Produk_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database; // Initialize database connection
    }

    public function getDataProduk(){
        $this->db->query('SELECT * FROM tb_produk'); // Query to fetch all product data
        return $this->db->resultSet(); // Return result set
    }

    public function getDataProdukSearching($data){
        $this->db->query('SELECT * FROM tb_produk WHERE produk_nama LIKE :produk_nama '); // Query to search for product data by name
        $this->db->bind('produk_nama', "%$data%"); // Bind parameter for product name
        return $this->db->resultSet(); // Return result set
    }

    public function getEditDataProduk($data){
        $this->db->query('SELECT * FROM tb_produk WHERE produk_id = :produk_id '); // Query to fetch product data for editing
        $this->db->bind('produk_id', $data); // Bind parameter for product ID
        return $this->db->resultSet(); // Return result set
    }

    public function tambahDataProduk($data){

        $this->db->query("INSERT INTO tb_produk VALUES ('', :produk_id_kat, :produk_id_user, :produk_kode, :produk_nama, :produk_hrg, :produk_keterangan, :produk_stock, :produk_photo, :created_at, :updated_at)");

        $this->db->bind('produk_id_kat', $data['produk_id_kat']);
        $this->db->bind('produk_id_user', $data['produk_id_user']);
        $this->db->bind('produk_kode', $data['produk_kode']);
        $this->db->bind('produk_nama', $data['produk_nama']);
        $this->db->bind('produk_hrg', $data['produk_hrg']);
        $this->db->bind('produk_keterangan', $data['produk_keterangan']);
        $this->db->bind('produk_stock', $data['produk_stock']);
        $this->db->bind('produk_photo', $data['produk_photo']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount(); // Return number of affected rows
    }

    public function editDataProduk($data){

        $this->db->query("UPDATE `tb_produk` SET `produk_id_kat`= :produk_id_kat, `produk_id_user`= :produk_id_user, `produk_kode`= :produk_kode, `produk_nama`= :produk_nama, `produk_hrg`= :produk_hrg, `produk_keterangan`= :produk_keterangan, `produk_stock`= :produk_stock, `produk_photo`= :produk_photo, `created_at`= :created_at, `updated_at`= :updated_at WHERE produk_id = :produk_id ");

        $this->db->bind('produk_id', $data['produk_id']);
        $this->db->bind('produk_id_kat', $data['produk_id_kat']);
        $this->db->bind('produk_id_user', $data['produk_id_user']);
        $this->db->bind('produk_kode', $data['produk_kode']);
        $this->db->bind('produk_nama', $data['produk_nama']);
        $this->db->bind('produk_hrg', $data['produk_hrg']);
        $this->db->bind('produk_keterangan', $data['produk_keterangan']);
        $this->db->bind('produk_stock', $data['produk_stock']);
        $this->db->bind('produk_photo', $data['produk_photo']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount(); // Return number of affected rows

    }

    public function deleteDataProduk($id){
        $this->db->query("DELETE FROM tb_produk WHERE produk_id = :produk_id");

        $this->db->bind('produk_id', $id);

        $this->db->execute();

        return $this->db->rowCount(); // Return number of affected rows
    }
    
}
?>
