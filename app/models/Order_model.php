<?php

class Order_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataOrder(){
        $this->db->query('SELECT * FROM tb_order');
        return $this->db->resultSet();
    }

    public function getDataOrderSearching($data){
        $this->db->query('SELECT * FROM tb_order WHERE order_kode LIKE :order_kode ');
        $this->db->bind('order_kode', "%$data%");
        return $this->db->resultSet();
    }

    public function getEditDataOrder($data){
        $this->db->query('SELECT * FROM tb_order WHERE order_id = :order_id ');
        $this->db->bind('order_id', $data);
        return $this->db->resultSet();
    }

    public function tambahDataOrder($data){

        $this->db->query("INSERT INTO tb_order VALUES ('', :order_id_user, NOW(), :order_kode, :order_ttl, :order_ongkir, :order_byr_deadline, NOW())");

        $this->db->bind('order_id_user', $data['order_id_user']);
        $this->db->bind('order_kode', $data['order_kode']);
        $this->db->bind('order_ttl', $data['order_ttl']);
        $this->db->bind('order_ongkir', $data['order_ongkir']);
        $this->db->bind('order_byr_deadline', $data['order_byr_deadline']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataOrder($data){

        $this->db->query("UPDATE `tb_order` SET `order_id_user`= :order_id_user, `order_kode`= :order_kode, `order_ttl`= :order_ttl, `order_ongkir`= :order_ongkir, `order_byr_deadline`= :order_byr_deadline, `updated_at`= NOW() WHERE order_id = :order_id ");

        $this->db->bind('order_id', $data['order_id']);
        $this->db->bind('order_id_user', $data['order_id_user']);
        $this->db->bind('order_kode', $data['order_kode']);
        $this->db->bind('order_ttl', $data['order_ttl']);
        $this->db->bind('order_ongkir', $data['order_ongkir']);
        $this->db->bind('order_byr_deadline', $data['order_byr_deadline']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataOrder($id){
        $this->db->query("DELETE FROM tb_order WHERE order_id = :order_id");

        $this->db->bind('order_id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>
