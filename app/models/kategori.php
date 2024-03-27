<?php

class Kategori_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database; 
    }

    public function getDataKategori(){
        $this->db->query('SELECT * FROM tb_kategori'); 
        return $this->db->resultSet(); 
    }

    public function getEditDataKategori($data){
        $this->db->query('SELECT * FROM tb_kategori WHERE kat_ID = :kat_ID '); 
        $this->db->bind('kat_ID', $data); 
        return $this->db->resultSet(); 
    }

    public function tambahDataKategori($data){

        $this->db->query("INSERT INTO tb_kategori (kat_nama, kat_keterangan, created_at, updated_at) VALUES (:kat_nama, :kat_keterangan, :created_at, :updated_at)");

        $this->db->bind('kat_nama', $data['kat_nama']);
        $this->db->bind('kat_keterangan', $data['kat_keterangan']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function editDataKategori($data){

        $this->db->query("UPDATE `tb_kategori` SET `kat_nama`= :kat_nama, `kat_keterangan`= :kat_keterangan, `created_at`= :created_at, `updated_at`= :updated_at WHERE kat_ID = :kat_ID ");

        $this->db->bind('kat_ID', $data['kat_ID']);
        $this->db->bind('kat_nama', $data['kat_nama']);
        $this->db->bind('kat_keterangan', $data['kat_keterangan']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function deleteDataKategori($id){
        $this->db->query("DELETE FROM tb_kategori WHERE kat_ID = :kat_ID");

        $this->db->bind('kat_ID', $id);

        $this->db->execute();

        return $this->db->rowCount(); 
    }
}
?>