<?php



Class Cart_model extends CI_Controller{

    public function getCartByUserId($id){

    
         $this->db->select('carts.id, products.product_name, products.product_price');
         $this->db->join('products', 'products.id = carts.product_id');
         $query =$this->db->get_where('carts',['carts.user_id'=>1])->result_array();
            
         return $query ;
    }

    public function deleteCartById($id){

        $this->db->where('id', $id); 
        $this->db->delete('carts');

    }

    public function addCart($id){

        $data = array(
            'product_id'=>$id,
            'user_id'=>'1',
            
        );

        $this->db->insert('carts',$data);
    }


    
}
?>