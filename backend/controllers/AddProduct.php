<?php

class AddProduct extends Controller {
    //  Index is default method
    public function index() {
        $this->view('template-part/header-add');
        $this->view('addProduct/index');
        $this->view('template-part/footer');
    }
    // Insert data
    public function insert() {      
        $this->model('ProductModel')->insertData($_POST); 
        return header( 'Location: ' . BASEURL);
    }
}