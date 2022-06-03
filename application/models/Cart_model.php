<?php



Class Cart_model extends CI_Controller{

    public function getCartByUserId($id){

    
    $this->db->select('*');
    $this->db->join('products', 'products.id = carts.product_id');
    $query =$this->db->get_where('carts',['carts.user_id'=>1])->result_array();

    return $query ;
    }
}
?>