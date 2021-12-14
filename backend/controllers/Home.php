<?php

class Home extends Controller {
    //  Index is default method
    public function index() {
        $this->view('home/index');
    }
}