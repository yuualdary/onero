<?php

Class Home extends CI_Controller{

    public function index(){

        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('index',$data);
        $this->load->view('templates/footer');

    }
}

?>