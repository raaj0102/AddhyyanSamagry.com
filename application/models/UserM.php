<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model {
    
    public function get_catList() 
    {
//       return $this->db->get('category')->result();
       return $this->db->query("SELECT category.*,count(products.category)AS total FROM products RIGHT JOIN category ON category.cid = products.category GROUP BY(category.cid) DESC LIMIT 7")->result();
    }
        
    public function get_product_listByCat($cId,$sort)
    {
        if($cId>0)
        {
           $sql =" WHERE category='$cId'"; 
        }
        else
        {
            $sql = "";
        }
        if($sort==1)
        {$s = "ORDER BY (products.rating) DESC"; }
        elseif ($sort==2) 
        {$s = "ORDER BY (products.price2) ASC "; }
        elseif ($sort==3) 
        { $s = "ORDER BY (products.price2) DESC "; }
        elseif ($sort==4) 
        { $s = "ORDER BY (products.p_name) ASC ";}
        elseif ($sort==5) 
        {  $s = "ORDER BY (products.p_name) DESC ";}
        else
        { $s = "";}
        
       return $this->db->query("SELECT * FROM products LEFT JOIN category ON products.category = category.cid".$sql.$s)->result();
    }
    
    public function get_allProduct()
    {
       return $this->db->query("SELECT * FROM products LEFT JOIN category ON products.category = category.cid ORDER BY (p_id) DESC LIMIT 8")->result();
    }
    
    public function get_allProductList()
    {
       return $this->db->query("SELECT * FROM products LEFT JOIN category ON products.category = category.cid ORDER BY (p_id) DESC")->result();
    }
    
    public function get_singleProduct($pId)
    {
      return  $this->db->query("SELECT * FROM products LEFT JOIN category ON products.category = category.cid WHERE p_id ='$pId'")->row();
    }
    
    public function get_cat_model()
    {
       return $this->db->get('category ORDER BY (cid) DESC')->result();
    }
    
    public function add_wishlist_model($pid,$uid)
    {
       return $this->db->query("INSERT INTO wishlist(product_id,user_id) VALUES('$pid','$uid')");
    }
    
    public function get_user_wishlist($uid)
    {
        $this->db->select('product_id,wishlist.createdate,p_name,photo,price2,pstatus');
        $this->db->where('user_id',$uid);
        $this->db->join("products","wishlist.product_id = products.p_id","LEFT");
       return $this->db->get('wishlist')->result();
        
    }
    
    public function remove_from_wishlist($pid,$uid)
    {
      return $this->db->query("DELETE FROM wishlist WHERE user_id = '$uid' AND product_id = '$pid' ");
    }
    
    public function clear_all_wishlist($uid) 
    {
       return $this->db->query("DELETE FROM wishlist WHERE user_id = '$uid'");
    }
    
    public function get_data_for_cart($pid) 
    {
       return $this->db->query("SELECT p_id, p_name, price2, photo, category.cat_name FROM products LEFT JOIN category ON products.category = category.cid WHERE p_id = '$pid' ")->row();
    }
    
    public function insert_final_submit($order_date,$order_no,$userId,$payment_method,$qty,$amount,$city,$zip,$add1,$add2)
    {
       $r = $this->db->query("INSERT INTO orders (order_no,order_date,uid,amount,payment_method,qty) VALUES ('$order_no','$order_date','$userId','$amount','$payment_method','$qty') ");
        if($r)
        {
                $cartProduct = $this->cart->contents();
                foreach ($cartProduct as $cp) {      
                     $this->db->query("INSERT INTO order_details (order_no,pid,qty,price,total_amt) VALUES('$order_no','$cp[id]','$cp[qty]','$cp[price]','$cp[subtotal]')");
                 }
                 $this->db->query("INSERT INTO user_address (City,Zip_code,addr1,addr2,uid) VALUES ('$city','$zip','$add1','$add2','$userId')"); 
        }        
              return $r;
    }
    
    public function get_order_list($uid)
    {
       return $this->db->query("SELECT order_no, order_date, order_status, amount FROM orders WHERE uid = '$uid' ")->result();
    }
}

