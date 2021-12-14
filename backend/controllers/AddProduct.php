<?php

class AddProduct extends Controller {
    //  Index is default method
    public function index( ) {
        $this->view('addProduct/index');
    }
}