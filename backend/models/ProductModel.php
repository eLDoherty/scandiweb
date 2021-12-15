<?php 

// To handle all data on add product page

class ProductModel {

    public function __construct() {
        $this->db = new Database;
    }

    public function insertData( $data ) {

        $sku = $data['sku'];
        $name = $data['name'];
        $price = $data['price'];
        $type = $data['productType'];
        $weight = $data['weight'];
        $size = $data['size'];
        // dimension
        $height = $data['height'];
        $width = $data['width'];
        $length = $data['length'];


        if( $height == "" || $width == "" || $length == "") {
            $dimension = "";
        } else {
        $dimension = $height . 'x' . $width . 'x' . $length;
        }

        $query = "INSERT INTO products VALUES ( :sku, :name, :price, :size, :weight, :dimension )";
        $this->db->query($query);
        $this->db->bind( 'sku' , $sku );
        $this->db->bind( 'name' , $name );
        $this->db->bind( 'price' , $price );
        $this->db->bind( 'size' , $size );
        $this->db->bind( 'weight' , $weight );
        $this->db->bind( 'dimension' , $dimension );
        $this->db->execute();
    }
}