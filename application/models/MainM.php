<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainM extends CI_Model {

    public function register_user_model($fname,$lname,$mail,$mobile,$pwd)
    {  
      $sql ="INSERT INTO user(Fname,Lname,u_email,u_mobile,password)VALUES('$fname','$lname','$mail','$mobile','$pwd')";
      $res = $this->db->query($sql);
      return $res;
        
    }
    
//    public function get_user_auth($m)
//    {
//       return $this->db->query("SELECT * FROM user WHERE u_email='$m' ");
//    }
    
    public function register_seller_model($fname,$lname,$mail,$mobile,$phone,$pwd,$addr,$company,$cat)
    {
      $sql=  "INSERT INTO seller(fname,lname,address,phone,phone2,company_name,email,password,category)VALUES('$fname','$lname','$addr','$mobile','$phone','$company','$mail','$pwd','$cat')";
      $res= $this->db->query($sql);
      return $res;
    }
    
    
    
}