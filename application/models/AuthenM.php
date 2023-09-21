<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class AuthenM extends CI_Model
 {
    public function login_data_model($smail,$spass)
    {
   return $this->db->query("SELECT * FROM seller WHERE (email= '$smail' OR phone2= '$smail') AND password = '$spass'")->row();
     
//         $this->db->where('password',$spass);
//         $this->db->where('email',$smail);
//         $this->db->or_where('phone2',$smail);
//         return $this->db->get('seller')->row();
          
    }
    
    public function login_user_model($umail,$upass) 
    {
//        $this->db->where('u_email',$umail);
//        $this->db->where('password',$upass);
//       return $this->db->get('user')->row();
       return $this->db->query("SELECT * FROM user WHERE (u_email= '$umail' OR u_mobile= '$umail') AND password = '$upass'")->row();
     
    }
    
    public function get_seller_stats($sid)
    {
        $total_cat = $this->db->query("SELECT COUNT(cid)AS total_cat FROM category")->row()->total_cat;
        $total_pro = $this->db->query("SELECT COUNT(p_id)AS total_pro FROM products WHERE seller ='$sid' ")->row()->total_pro;
        $all_pro = $this->db->query("SELECT COUNT(od.od_id)AS orders FROM order_details od LEFT JOIN products p ON od.pid = p.p_id WHERE seller ='$sid' ")->row()->orders;
        $total_income = $this->db->query("SELECT SUM(od.price*od.qty)AS income FROM order_details od LEFT JOIN products p ON p.p_id = od.pid WHERE p.seller ='$sid' ")->row()->income;
//        $totalCat = $this->db->query("");
//        $totalCat = $this->db->query("");
         return $stats = array(
            'total_cat'=>$total_cat,
            'total_pro'=>$total_pro,
            'all_pro'=>$all_pro,
            'total_income'=>$total_income
        );
    }
    
    public function get_today_orders($sId,$today)
    {
        return $this->db->query("SELECT ORD.order_no, ORD.order_status, ORD.amount, U.Fname, U.Lname, U.u_mobile FROM orders ORD LEFT JOIN user U ON ORD.uid = U.u_id LEFT JOIN order_details OD ON ORD.order_no = OD.order_no LEFT JOIN products P ON OD.pid = P.p_id WHERE DATE_FORMAT(order_date,'%Y-%m-%d') = '$today' AND P.seller = '$sId' GROUP BY ORD.order_no ")->result();
    }
 }
