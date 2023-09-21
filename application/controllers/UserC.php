<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');
class UserC extends CI_Controller {
    
    public function get_category_list()
    {
       $data['title'] = 'AddhyyanSamagry.com|All Course';
       $data['catlist'] = $this->UserM->get_cat_model();
       $this->load->view('front/catList',$data);
    }
    
    public function product_compare()
    {
        $this->load->view('back/profile');
    }


    public function pro_catList()
    {
                $cId = $this->input->get('cat');               
                $sort = $this->input->get('sort');               
                $data['title'] = 'AddhyyanSamagry.com|Products';
                $data['catList'] = $this->UserM->get_catList();
                $data['plist']= $this->UserM->get_product_listByCat($cId,$sort);
//                print_r($data['plist']);
		$this->load->view('front/products',$data);
    }
    
    public function pro_single() 
    {   
        $pId = $this->input->get('pid');      
        $sort = $this->input->get('cat');      
        $data['sProduct'] = $this->UserM->get_singleProduct($pId);
        $cId = $data['sProduct']->category;
        $data['plist']= $this->UserM->get_product_listByCat($cId,$sort);
        $data['catList'] = $this->UserM->get_catList();
        $data['title'] = "AddhyyanSamagry.com|Product-single";
        $this->load->view('front/single_productinfo',$data);
    }
    
    public function pro_list() 
    {
                $data['title'] = 'AddhyyanSamagry.com|All-Products';
                $data['catList'] = $this->UserM->get_catList();
                $data['allProducts'] = $this->UserM->get_allProductList();               
	        $this->load->view('front/allproducts',$data);
    }
    
    public function view_list() 
    {
                $data['title'] = 'AddhyyanSamagry.com|List-view';
                $data['catList'] = $this->UserM->get_catList();
                $data['allProducts'] = $this->UserM->get_allProductList();               
	        $this->load->view('front/listofProduct',$data);    
    }
    
    public function add_wishlist() 
    {
       $pid = $this->input->post('product_id');
       $uid = $this->input->post('user_id');
       echo $this->UserM->add_wishlist_model($pid,$uid);
       
    }
    
    public function all_wishlist()
    {
                $data['title'] = 'AddhyyanSamagry.com|My Wishlist';
                $data['catList'] = $this->UserM->get_catList();
                $data['wishlist'] = $this->UserM->get_user_wishlist($this->session->userdata('userId'));
                $this->load->view('front/my-wishlist',$data);           
    }
    
    public function remove_wishlist()
    {
     echo $this->UserM->remove_from_wishlist($this->input->post('product_id'),$this->input->post('user_id'));
    }
    
    public function clear_wishlist()
    {
       echo $this->UserM->clear_all_wishlist($this->input->post('user_id'));
    }
    
    public function add_to_cart()
    {
        $pid =$this->input->post('product_id');
         $res = $this->UserM->get_data_for_cart($pid); 
      if($res){
          $cat_data = array(  
          "id"=>$res->p_id,
          "name"=>$res->p_name,
          "price"=>$res->price2,
          "photo"=>$res->photo,
          "cat"=>$res->cat_name,
          "qty"=>1
      );
       echo $this->cart->insert($cat_data);   
      }
      else{
          echo 'Something went wrong!';
      }
      }
    
    public function cart_list() 
    {
         $data['title'] = 'AddhyyanSamagry.com|My-cart';
         $data['catList'] = $this->UserM->get_catList();
         $this->load->view('front/cart',$data);
    }
    
    public function remove_from_cart() 
    {
       echo $this->cart->remove($this->input->post('row_id'));     
    }
    
    public function clear_cart()
    {
       echo $this->cart->destroy();
    }
    
    public function upd_cart() 
    {
       $rowId= $this->input->post('row_id');
       $qty= $this->input->post('qty');
       
       $cart_data = array(
           'rowid'=>$rowId,
           'qty'=>$qty
       );      
     echo $this->cart->update($cart_data);
    }
    
    public function checkout_cart()
    {
        if($this->session->userdata('userId')=="")
        {
            redirect(base_url('login-user?direct=yes'));
        }
        
         $cartBtn = $this->input->post('cartBtn');
        if(isset($cartBtn))
       {
           
            if($cartBtn=="address")
            {
               $city =  $this->input->post('city');
               $zip  =  $this->input->post('zipcode');
               $addr1=  $this->input->post('addr1');
               $addr2=  $this->input->post('addr2');
               $ch   =  $this->input->post('ch');
               
            $sess_data = array(
                    'city'=>$city,
                    'zip'=>$zip,
                    'addr1'=>$addr1,
                    'addr2'=>$addr2
            ); 
            $this->session->set_userdata($sess_data); 
               redirect(base_url('checkout?ch='.$ch));                    
            }
        if($cartBtn=="payment")
            {
               $pMethod =  $this->input->post('pMethod');
               $ch =  $this->input->post('ch');
               switch ($pMethod) {
                   case "CARD":
                   {
                       $cardNo =  $this->input->post('cardNo');
                       $fname =  $this->input->post('fname');
                       $expiry =  $this->input->post('expiry');
                       $cvc =  $this->input->post('cvc');
                       
                        $sess_data = array(
                            'cardNo'=>$cardNo,
                            'fullname'=>$fname,
                            'exp'=>$expiry,
                            'cvc'=>$cvc,
                            'pMethod'=>$pMethod    
                    ); 
                        $this->session->set_userdata($sess_data); 
                        redirect(base_url('checkout?ch='.$ch)); 
                        break;
                   }                  
                   case "UPI":
                   {
                       $upi =  $this->input->post('upiId');
                       
                        $sess_data = array(
                            'upiId'=>$upi,
                            'pMethod'=>$pMethod    
                    ); 
                        $this->session->set_userdata($sess_data); 
                        redirect(base_url('checkout?ch='.$ch)); 
                        break;
                   }             
                   case "COD":
                   {
                        $sess_data = array(
                        'pMethod'=>$pMethod    
                    ); 
                        $this->session->set_userdata($sess_data); 
                        redirect(base_url('checkout?ch='.$ch)); 
                        break;
                   }  
                      default:
                       break;
               }
               
            }
       }
              $this->load->view('front/checkout-page');
        
    }
       
    public function order_place()
    {
        
        $rand = rand(1,999);
        $rand_fun = "O".$rand;
        $order_no = strtoupper($rand_fun);
        $order_date = date('Y-m-d h:i:s');
       $UserId = $this->session->userdata('userId');
       $paymentM =$this->session->userdata('pMethod');
       $qty = $this->cart->total_items();
       $amount = $this->session->userdata('gTotal') ;
//       echo $order_date,$order_no,$UserId,$paymentM,$qty,$amount;
//       die();
        $city = $this->session->userdata('city');
       $zip = $this->session->userdata('zip');
       $add1 = $this->session->userdata('addr1');
       $add2 = $this->session->userdata('addr2');
       $res = $this->UserM->insert_final_submit($order_date,$order_no,$UserId,$paymentM,$qty,$amount,$city,$zip,$add1,$add2);
       if($res)
       {
           $this->cart->destroy();
           redirect(base_url('checkout-complete?or='.$order_no));
       }
       else
       {
            redirect(base_url('checkout-complete?err=yes'));
       }
    }
    
    public function checkout_complete ()
    {
        if($this->session->userdata('userId')=="")
        {
            redirect(base_url('login-user?direct=yes'));
        }
        $this->load->view('front/checkout-complete');
    }
    public function track_order()
    {
        
          $this->load->view('front/order-tracking');
    }
    
    public function user_orders() 
    {
        $uid = $this->session->userdata('userId');
        $data['orderList'] = $this->UserM->get_order_list($uid);
        $this->load->view('front/account-orders',$data);
    }
    
    public function user_profile()
    {
        $this->load->view('front/user-profile');
    }
    
    public function address_user()
    {
        $this->load->view('front/account-address');
    }    
     
    public function pro_pic() 
    {
        $this->load->view('back/profile_photo');
    }
}

