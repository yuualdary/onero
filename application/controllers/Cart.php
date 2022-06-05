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

    public function ConfirmPayment(){

        $data['judul'] = 'Confirm Payment';
    //    $data['carts'] = $this->Cart_model->getCartByUserId($id);
      
        // if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('cart/confirmpayment',$data);
            $this->load->view('templates/footer');
          //  $this->Product_model->addProduct();
         
        


    }

    //////////////////////////////GET/////////////////////////////////////

    public function CreateCart($id){
        
        $this->Cart_model->addCart($id);
        redirect('cart/ListCart/1');
    }

    public function DeleteCart($id){

        $this->Cart_model->deleteCartById($id);
        redirect('cart/ListCart/1');


    }

}

?>