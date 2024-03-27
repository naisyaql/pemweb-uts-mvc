<?php

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database; 
    }

    public function getDataUser(){
        $this->db->query('SELECT * FROM tb_user'); 
        return $this->db->resultSet(); 
    }

    public function getEditDataUser($data){
        $this->db->query('SELECT * FROM tb_user WHERE user_ID = :user_ID '); 
        $this->db->bind('user_ID', $data); 
        return $this->db->resultSet(); 
    }

    public function tambahDataUser($data){

        $this->db->query("INSERT INTO tb_user (user_email, user_pass, user_nama, user_alamat, user_hp, user_pos, user_role, user_aktif, created_at, updated_at) VALUES (:user_email, :user_pass, :user_nama, :user_alamat, :user_hp, :user_pos, :user_role, :user_aktif, :created_at, :updated_at)");

        $this->db->bind('user_email', $data['user_email']);
        $this->db->bind('user_pass', $data['user_pass']);
        $this->db->bind('user_nama', $data['user_nama']);
        $this->db->bind('user_alamat', $data['user_alamat']);
        $this->db->bind('user_hp', $data['user_hp']);
        $this->db->bind('user_pos', $data['user_pos']);
        $this->db->bind('user_role', $data['user_role']);
        $this->db->bind('user_aktif', $data['user_aktif']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function editDataUser($data){

        $this->db->query("UPDATE `tb_user` SET `user_email`= :user_email, `user_pass`= :user_pass, `user_nama`= :user_nama, `user_alamat`= :user_alamat, `user_hp`= :user_hp, `user_pos`= :user_pos, `user_role`= :user_role, `user_aktif`= :user_aktif, `created_at`= :created_at, `updated_at`= :updated_at WHERE user_ID = :user_ID ");

        $this->db->bind('user_ID', $data['user_ID']);
        $this->db->bind('user_email', $data['user_email']);
        $this->db->bind('user_pass', $data['user_pass']);
        $this->db->bind('user_nama', $data['user_nama']);
        $this->db->bind('user_alamat', $data['user_alamat']);
        $this->db->bind('user_hp', $data['user_hp']);
        $this->db->bind('user_pos', $data['user_pos']);
        $this->db->bind('user_role', $data['user_role']);
        $this->db->bind('user_aktif', $data['user_aktif']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount(); 

    }

    public function deleteDataUser($id){
        $this->db->query("DELETE FROM tb_user WHERE user_ID = :user_ID");

        $this->db->bind('user_ID', $id);

        $this->db->execute();

        return $this->db->rowCount(); 
    }
}
?>