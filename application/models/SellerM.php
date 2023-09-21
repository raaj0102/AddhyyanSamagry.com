<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SellerM extends CI_Model
{
    public function ins_seller_model($doc_name,$catName,$sId)
    {
     return $this->db->query("INSERT INTO category(cat_name,cat_img,seller) VALUES ('$catName','$doc_name','$sId')");
         
    }
    
    public function get_seller_stats($sid) 
    {
        $total_pro = $this->db->query("SELECT COUNT(p_id)AS total_pro FROM products WHERE seller ='$sid' ")->row()->total_pro;
        $all_pro = $this->db->query("SELECT COUNT(od.od_id)AS orders FROM order_details od LEFT JOIN products p ON od.pid = p.p_id WHERE seller ='$sid' ")->row()->orders;
        $customer = $this->db->query("SELECT COUNT(o.uid)AS user FROM orders o LEFT JOIN order_details od ON od.order_no = o.order_no
                                      LEFT JOIN products p ON od.pid = p.p_id WHERE p.seller ='$sid' ")->row()->user;
        $total_revenue = $this->db->query("SELECT SUM(od.price*od.qty)AS income FROM order_details od LEFT JOIN products p ON p.p_id = od.pid WHERE p.seller ='$sid' ")->row()->income;
        $no_sale = $this->db->query("SELECT SUM(o.qty) AS no_sale  FROM orders o LEFT JOIN order_details od ON o.order_no = od.order_no LEFT JOIN products p ON od.pid = p.p_id WHERE p.seller ='$sid' ")->row()->no_sale;
        return $stats = array(
            'total_pro'=>$total_pro,
            'all_pro'=>$all_pro,
            'customer'=>$customer,
            'total_revenue'=>$total_revenue,
            'no_sale'=>$no_sale
        );
    }
    
    public function get_today_sale($sId,$todaySales) 
    {
        $sale= $this->db->query("SELECT SUM(ORD.amount)AS sale FROM orders ORD LEFT JOIN order_details od ON ORD.order_no = od.order_no LEFT JOIN products p ON od.pid = p.p_id WHERE DATE_FORMAT(order_date,'%Y-%m-%d') ='$todaySales' AND p.seller ='$sId' ")->row()->sale;
         return $Sales = array(
             'sale'=>$sale
         );
    }
    
    public function get_cat_data()
    {
       return $this->db->get("category")->result();
    }
    
    public function get_catList_model($Cid) 
    {
        $this->db->where('cid',$Cid);
        return $this->db->get('category')->row();
    }
    
    public function upd_cat_model($Cname,$doc_name,$CId) 
    {
        $data = array(
          'cat_name'=>$Cname,
            'cat_img'=>$doc_name
        );
        $this->db->where('cid',$CId);
       return $this->db->update('category',$data);
    }
    
    public function delete_cat_model($Cid)
    {
        $this->db->where('cid',$Cid);
       return $this->db->delete('category');
    }
    
    public function get_cat_list()
    {
        $this->db->select('cid,cat_name');
       return $this->db->get("category")->result();
      
    }
    
    public function ins_product_model($doc_name,$sId,$pName,$pQty,$pDesc,$pCat,$MRP,$oPrice,$tag)
    {
        $pdata = array(
            'p_name'=>$pName,
            'p_desc'=>$pDesc,
            'price1'=>$MRP,
            'price2'=>$oPrice,
            'photo'=>$doc_name,
            'category'=>$pCat,
            'qty'=>$pQty,
            'tag'=>$tag,
            'seller'=>$sId     
        );
       return $this->db->insert('products',$pdata);
    }
    
    public function get_prod_list($sellerId) 
    {
       $this->db->where('seller',$sellerId);
       return $this->db->get('products')->result();
    }
    
    public function get_proList_model($pid)
    {
        $this->db->where('p_id',$pid);
        return $this->db->get('products')->row();
    }
    
    public function upd_prodata($pname,$pqty,$pdesc,$mrp,$offer,$cat,$photo,$pid)
    {
        $data = array(
            'p_name'=>$pname,
            'qty'=>$pqty,
            'p_desc'=>$pdesc,
            'price1'=>$mrp,
            'price2'=>$offer,
            'category'=>$cat,
            'photo'=>$photo,
            'p_id'=>$pid
        );
        $this->db->where('p_id',$pid);
       return $this->db->update('products',$data);
    }
    
    public function delete_pro_model($pid)
    {
         $this->db->where('p_id',$pid);
       return $this->db->delete('products');
    }
    
    public function get_order_details($oNo)
    {
       return $this->db->query("SELECT P.p_id, P.p_name, P.price2, P.photo, C.cat_name, 
                            P.qty AS stock, OD.order_no, OD.qty
                            FROM order_details OD LEFT JOIN products P ON OD.pid = P.p_id 
                            LEFT JOIN category C ON P.category = C.cid
                            WHERE OD.order_no = '$oNo';")->result();
    }
    
    public function get_order_add($oNo)
    {
       return $this->db->query("SELECT  O.order_no, O.order_date, U.City, U.Zip_code, U.addr1, O.order_status FROM user_address U LEFT JOIN orders O ON O.uid = U.uid WHERE order_no = '$oNo';")->result();
    }
    
    public function get_all_orders($sId)
    {
        return $this->db->query("SELECT ORD.order_no, ORD.order_date, ORD.order_status, ORD.amount, U.Fname, U.Lname, U.u_mobile FROM orders ORD LEFT JOIN user U ON ORD.uid = U.u_id LEFT JOIN order_details OD ON ORD.order_no = OD.order_no LEFT JOIN products P ON OD.pid = P.p_id WHERE P.seller = '$sId' GROUP BY ORD.order_no ")->result();
    }
    
    public function get_pie_data()
    {
       $r = $this->db->query("SELECT cat_name,
                    COUNT(products.p_id) AS no_pro
                    FROM category 
                    LEFT JOIN products ON category.cid = products.category
                    GROUP BY (category.cat_name);")->result();
        
       $cat_name = array();
       $no_pro = array();
       $catCount = 1;
       
       foreach ($r as $rd)
       {           
           array_push($cat_name,"'$rd->cat_name'");
           array_push($no_pro,$rd->no_pro);
           $catCount++;
       }
           $pieData = array("catName"=>$cat_name,"proNo"=>$no_pro, "catCount"=>$catCount);
           return $pieData;
       
    }
    
    public function get_line_data()
    {
           $r = $this->db->query("SELECT COUNT(oid) AS no_ord, DATE_FORMAT(order_date, '%d-%b') AS dt FROM orders 
            WHERE MONTH(order_date) = MONTH(CURRENT_DATE()) AND YEAR(order_date) = YEAR(CURRENT_DATE())
            GROUP BY DATE_FORMAT(order_date,'%d-%m-%Y');")->result();
           
           $dt = array();
           $ord = array();
           
           foreach ($r as $rd) 
           {
               array_push($ord,$rd->no_ord);
               array_push($dt,"'$rd->dt'");              
           }
           
           $aa =array("dt"=>$dt, "ord"=>$ord);
           return $aa;
    }
    
    
}

