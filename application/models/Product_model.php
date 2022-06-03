<?php

class Product_model extends CI_model{

    public function getAllProduct(){
        return $this->db->get('products')->result_array();
    }
    public function addProduct(){
        $data=[
            "productname" => $this->input->post('product_name', true),
            "productdescription" => $this->input->post('product_description', true),
            "productprice" => $this->input->post('product_price', true),
            "productqty" => $this->input->post('product_qty', true),

        ];

        $this->db->insert('products',$data);
    }


    public function getProductById($id){
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }
}