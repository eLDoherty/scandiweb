<?php 

// To handle all data on Home / index / product list

class HomeModel {

    private $table = 'products';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getData() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function deleteData($sku) {
       $data = implode("','" , $sku );
       $query = "DELETE FROM products WHERE sku IN ('$data')";
       $this->db->query($query);
       $this->db->execute();
    }
}