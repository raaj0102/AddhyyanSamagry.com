<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SellerC extends CI_Controller 

{
    public function recovery_password()
    {
        $this->load->view('front/account-password-recovery');
    }
    
    public function profile_seller()
    {
        $data['title']= "AddhyyanSamagry.com|Seller-Profile";
        $data['stats'] = $this->SellerM->get_seller_stats($this->session->userdata('sellerId'));
        $sId = $this->session->userdata('sellerId');
        $todaySales = date('Y-m-d');
       $data['todaySales'] = $this->SellerM->get_today_sale($sId,$todaySales);
        $this->load->view('back/profile_2',$data);
    }
    
    public function category_add()
    {
        if($this->session->userdata('sellerId')=="")
        {
            redirect(base_url('login-seller'));
        }
        $data['title'] = "AddhyyanSamagry.com-Ecom |Courses";
        $this->load->view('back/add_category',$data);
    }
    
    public function category_list() 
    {   
      if($this->session->userdata('sellerId')=="")
        {
            redirect(base_url('login-seller'));
        }
        $data['title'] = "AddhyyanSamagry.com|CourseList";
        $data['catList'] = $this->SellerM->get_cat_data();
//        print_r($data);
        $this->load->view('back/categoryList',$data);
    }
    
    public function ins_addCat() 
    {
       $catName = $this->input->post('cat_name');
       
              if($_FILES AND $_FILES['cat_img']['name'])
              {
                 $ext = pathinfo($_FILES['cat_img']['name'], PATHINFO_EXTENSION);
                 $doc_name = "CAT".date('ymdhis').".".$ext;
                 
                  $config['upload_path'] = './uploads/category';
                  $config['allowed_types'] = 'pdf|jpg|jpeg|PDF|JPG|JPEG|png|PNG|webp';
                  $config['max_size'] = 1000000;
                  $config['file_name'] = $doc_name;
                  
                  $this->load->library('upload',$config);
                  
                  if(!$this->upload->do_upload('cat_img'))
                  {
                    $error = array('error' => $this->upload->display_errors());
                   // print_r($error);
                    $this->load->view('',$error);
                  }
                   else 
                   {
                      $data = array('upload_data' => $this->upload->data());
                   }
              }
              else{$doc_name = '';}
            
               $sId = $this->session->userdata('sellerId');
           $res = $this->SellerM->ins_seller_model($doc_name,$catName,$sId);
             
               if($res)
               {
                   redirect(base_url('all-categories?cat=added'));
               }
               else
               {
                   redirect(base_url('add-category?cat=error'));
               }

              }
                            
              public function edt_catList() 
              {
                if($this->session->userdata('sellerId')=="")
                 {
                    redirect(base_url('login-seller'));
                 }
                  $Cid = $this->input->get('Cid');
                  $data['title']= "AddhyyanSamagry.com|Edit Course";
                  $data['catList'] = $this->SellerM->get_catList_model($Cid);
                  $this->load->view('back/edit-category',$data);

              }
              
              public function upd_catList()
              {
                  $Cname = $this->input->post('catName');
                 $CId = $this->input->post('Cid');
                 
                  if($_FILES AND $_FILES['cat_img']['name'])
              {
                 $ext = pathinfo($_FILES['cat_img']['name'], PATHINFO_EXTENSION);
                 $doc_name = "CAT".date('ymdhis').".".$ext;
                 
                  $config['upload_path'] = './uploads/category';
                  $config['allowed_types'] = 'pdf|jpg|jpeg|PDF|JPG|JPEG|png|PNG|webp';
                  $config['max_size'] = 1000000;
                  $config['file_name'] = $doc_name;
                  
                  $this->load->library('upload',$config);
                  
                  if(!$this->upload->do_upload('cat_img'))
                  {
                    $error = array('error' => $this->upload->display_errors());
                   // print_r($error);
                    $this->load->view('',$error);
                  }
                   else 
                   {
                      $data = array('upload_data' => $this->upload->data());
                   }
                      unlink("uploads/category/".$this->input->post('cat_img_old'));
                    }
                    else{$doc_name = $this->input->post('cat_img_old');
                    }
                 
                 
               $res = $this->SellerM->upd_cat_model($Cname,$doc_name,$CId);
                  if($res>0)
                  {
                      redirect(base_url('all-categories?success=yes'));
                  }
                  else
                  {
                      redirect(base_url('all-categories?error=yes'));
                  }
              }
              
              public function dlt_catList() 
              {
                $Cid = $this->input->get('Cid');
              $res = $this->SellerM->delete_cat_model($Cid);
              if($res>0)
              {
                  redirect(base_url('all-categories?dlt=yes'));
              }
              else
              {
                  redirect(base_url('all-categories?dlt=no'));
              }
 
              }
              
               public function add_prod()
              {
                   if($this->session->userdata('sellerId')=="")
                      {
                        redirect(base_url('login-seller'));
                      }
                      
                       $data['title'] = "AddhyyanSamagry.com |Add-Product";
                        $data['cat'] = $this->SellerM->get_cat_list();
                      $this->load->view('back/add_product',$data);
              }
              
              public function ins_prod()
              {
                   $pName = $this->input->post('pro_name');
                   $pQty = $this->input->post('pro_qty');
                   $pDesc = $this->input->post('desc');
                   $pCat = $this->input->post('pcat');
                   $MRP = $this->input->post('Mprice');
                   $oPrice = $this->input->post('Oprice1');
                   $tag = $this->input->post('ptag');
       
              if($_FILES AND $_FILES['pro_img']['name'])
              {
                 $text = pathinfo($_FILES['pro_img']['name'], PATHINFO_EXTENSION);
                 $doc_name = "CAT".date('ymdhis').".".$text;
                 
//                 Make Directory Dynamically
//                  if(!is_dir('./uploads/product'))
//                  {
//                      mkdir('./uploads/product',0777,true);
//                  }
//                  
                  
                  $config['upload_path'] = './uploads/products';
                  $config['allowed_types'] = 'pdf|jpg|jpeg|PDF|JPG|JPEG|png|PNG|webp';
                  $config['max_size'] = 1000000;
                  $config['file_name'] = $doc_name;
                  
                  $this->load->library('upload',$config);
                  
                  if(!$this->upload->do_upload('pro_img'))
                  {
                    $error = array('error' => $this->upload->display_errors());
                   // print_r($error);
                    $this->load->view('',$error);
                  }
                   else 
                   {
                      $data = array('upload_data' => $this->upload->data());
                   }
              }
              else{$doc_name = '';}
            
               $sId = $this->session->userdata('sellerId');
           $res = $this->SellerM->ins_product_model($doc_name,$sId,$pName,$pQty,$pDesc,$pCat,$MRP,$oPrice,$tag); 
               if($res)
               {
                   redirect(base_url('add-product?pro=added'));
               }
               else
               {
                   redirect(base_url('add-product?pro=error'));
               }

              }
              
              public function pro_list()
              {
                   if($this->session->userdata('sellerId')=="")
                        {
                            redirect(base_url('login-seller'));
                        }
                        
                         $data['title'] = "AddhyyanSamagry.com |Product-List";
                        $data['proList'] = $this->SellerM->get_prod_list($this->session->userdata('sellerId'));
                         $this->load->view('back/productList',$data);
              }
              
              public function edt_proList() 
              {
                $pid = $this->input->get('Pid');
                $data['title']= "AddhyyanSamagry.com|Edit Product";
                  $data['proList'] = $this->SellerM->get_proList_model($pid);
                  $this->load->view('back/edit-productList',$data);
              }
              
              public function upd_proList() 
              {
                 $pname =  $this->input->post('pro_name');
                 $pqty = $this->input->post('pro_qty');
                 $pdesc =  $this->input->post('desc');
                 $mrp = $this->input->post('Mprice');
                 $offer =  $this->input->post('Oprice1');
                 $cat= $this->input->post('pcat');
                 $photo= $this->input->post('pro_img');
                 $pid = $this->input->get('Pid');
                 
                        $res = $this->SellerM->upd_prodata($pname,$pqty,$pdesc,$mrp,$offer,$cat,$photo,$pid);
                        if($res)
                        {
                            redirect(base_url('pro-list?upd=yes'));
                        }
                        else
                        {
                            redirect(base_url('edit-pdata?error=yes')); 
                        }             

              }
              
              public function dlt_proList() 
              {
                   $pid = $this->input->get('Pid');
              $res = $this->SellerM->delete_pro_model($pid);
              if($res>0)
              {
                  redirect(base_url('pro-list?dlt=yes'));
              }
              else
              {
                  redirect(base_url('pro-list?dlt=no'));
              }
              }
              
              public function order_details() 
              {
                 $data['title'] = "AddhyyanSamagry.com|Order Details";
                 $oNo= base64_decode($this->input->get('or'));
                 $data['orderdetails'] = $this->SellerM->get_order_add($oNo);
//                 print_r($data['orderdetails']);
//                 die();
                 $data['oDetails'] = $this->SellerM->get_order_details($oNo);
                 $this->load->view('back/order-details',$data);
              }
              
              public function all_orders()
              {
                   $data['title'] = "AddhyyanSamagry.com|All-Orders";
                   $sId = $this->session->userdata('sellerId');
                   $data['allOrder'] = $this->SellerM->get_all_orders($sId);
                  $this->load->view('back/all_orders',$data);
              }
              
              
                           
              
}


