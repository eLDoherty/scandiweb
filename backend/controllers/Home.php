<?php

class Home extends Controller {
    //  Index is default method
    public function index() {
        $data['data'] = $this->model('HomeModel')->getData();
        $this->view('template-part/header-home');
        $this->view('home/index', $data);
        $this->view('template-part/footer');
    }

    public function delete() {
        $sku = $_POST['checkbox'];
        $this->model('HomeModel')->deleteData($sku);
        return header( 'Location: ' . BASEURL);
    }
}