<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenC extends CI_Controller 
{
    public function dashboard_seller()
    {
        if($this->session->userdata('sellerId')=="")
        {
            redirect(base_url('login-seller'));
        }
        $data['title'] = "AddhyyanSamagry.com|Seller-Dashboard";
       $data['stats'] = $this->AuthenM->get_seller_stats($this->session->userdata('sellerId'));
       $sId = $this->session->userdata('sellerId');
       $today = date('Y-m-d');
       $data['orderToday'] = $this->AuthenM->get_today_orders($sId,$today);
       $data['piedata'] = $this->SellerM->get_pie_data();
       $data['linedata'] = $this->SellerM->get_line_data();
//       print_r($data['piedata']);
//       die();
       $this->load->view('back/dashboard_4_1',$data);
    }
    
    public function seller_login()
    {
          $smail = $this->input->post('sname');
       $spass = md5($this->input->post('spass'));
       
      $res= $this->AuthenM->login_data_model($smail,$spass);
//   print_r($res);
//      die();
      if($res)
      {
          $session_data =array(
              'sellerId' =>$res->sid,
              'sellerfName' =>$res->fname,
              'sellerlName' =>$res->lname,
              'sellerAddr' =>$res->address,
              'sellerphone' =>$res->phone,
              'sellerphone2' =>$res->phone2,
              'sellercompany' =>$res->company_name,
              'sellermail' =>$res->email    
          );
//          print_r($session_data);

        $this->session->set_userdata($session_data);
//        print_r($session_data);
        
          redirect(base_url('seller-dashboard'));
      }
      else
      {
          redirect(base_url('seller-login-page?error=yes'));
      }    
    
    }
    
    public function user_login()
    {
           $umail = $this->input->post('umail');
       $upass = md5($this->input->post('upass'));
       
      $res = $this->AuthenM->login_user_model($umail,$upass);
      if($res)
       {
           $session_data =array(
               'userfName' =>$res->Fname,
               'userlName' =>$res->Lname,
               'userMobile' =>$res->u_mobile,
               'userMail' =>$res->u_email,
               'userId' =>$res->u_id
           );
           $this->session->set_userdata($session_data);
           redirect(base_url('homepage'));
       }
       else
       {
           redirect(base_url('account-loginPage?error=yes'));
       }
       
    }
    
    public function user_logout() 
    {
        $this->session->unset_userdata('userId');
    redirect(base_url('homepage'));
    }
    
    public function seller_logout() 
    {
        $this->session->unset_userdata('sellerId');
        redirect(base_url('homepage'));
    }
}