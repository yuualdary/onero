<?php

class Product_model extends CI_model{

    public function getAllProduct(){
        return $this->db->get('products')->result_array();
    }
    public function addProduct(){
        $data=[
            "product_name" => $this->input->post('product_name', true),
            "product_description" => $this->input->post('product_description', true),
            "product_price" => $this->input->post('product_price', true),
            "product_qty" => $this->input->post('product_qty', true),

        ];

        $this->db->insert('products',$data);
    }


    public function getProductById($id){
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }


    public function EditProduct(){
        $data=[
            "product_name" => $this->input->post('product_name', true),
            "product_description" => $this->input->post('product_description', true),
            "product_price" => $this->input->post('product_price', true),
            "product_qty" => $this->input->post('product_qty', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('products',$data);
    }
}