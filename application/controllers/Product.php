<?php

Class Product extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        


    }

    public function index(){

        $data['judul'] = 'Daftar Mahasiswa';
        $data['products'] = $this->Product_model->getAllProduct();
        $this->load->view('templates/header', $data);
        $this->load->view('index',$data);
        $this->load->view('templates/footer');

    }

    public function ViewDetail($id){

        $data['judul'] = 'Detail Product';
        $data['products'] = $this->Product_model->getProductById($id);
        $list['list'] = $this->Product_model->getAllProduct();
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail', $list);
        $this->load->view('templates/footer');

    }

    public function FormEditProduct($id){

        $data['judul'] = 'Edit Product';
        $data['products'] = $this->Product_model->getProductById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('product/editProduct',$data);
        $this->load->view('templates/footer');

    }


    public function FormProduct(){

        $data['judul'] = 'Create Product';
    //    $data['products'] = $this->Product_model->getProductById($id);

     //   $data['products'] = $this->Product_model->getAllProduct();
        $this->load->view('templates/header', $data);
        $this->load->view('product/addProduct',$data);
        $this->load->view('templates/footer');

    }




    //////////////////////////////GET/////////////////////////////////////

    public function PostProduct(){
        $data['judul'] = 'Form Add Product';

        $this->form_validation->set_rules('product_name','Product_name','required');
        $this->form_validation->set_rules('product_description','Product_description','required');
        $this->form_validation->set_rules('product_price','Product_description','required');
        $this->form_validation->set_rules('product_qty','Product_description','required');




        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('product/addProduct');
            $this->load->view('templates/footer');       
        }else{
            $this->Product_model->addProduct();
            redirect('product');
        }

    }

    public function EditProduct(){
        $data['judul'] = 'Edit Product';

        $this->form_validation->set_rules('product_name','Product_name','required');
        $this->form_validation->set_rules('product_description','Product_description','required');
        $this->form_validation->set_rules('product_price','Product_description','required');
        $this->form_validation->set_rules('product_qty','Product_description','required');




        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('product/editProduct');
            $this->load->view('templates/footer');       
        }else{
            $this->Product_model->EditProduct();
            redirect('product');
        }

    }




}

?>