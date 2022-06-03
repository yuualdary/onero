<?php

Class Cart extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        $this->load->model('Cart_model');
        $this->load->library('form_validation');


    }

    public function ListCart($id){

        $data['judul'] = 'List Cart';
        $data['carts'] = $this->Cart_model->getCartByUserId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('cart/cartlist',$data);
        $this->load->view('templates/footer');

    }

    public function ConfirmPayment($id){

        $data['judul'] = 'List Cart';
    //    $data['carts'] = $this->Cart_model->getCartByUserId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('cart/confirmpayment',$data);
        $this->load->view('templates/footer');

    }

    //////////////////////////////GET/////////////////////////////////////


}

?>