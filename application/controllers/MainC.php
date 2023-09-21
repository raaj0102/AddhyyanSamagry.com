<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainC extends CI_Controller {

	public function index()
	{
                $data['title'] = 'AddhyyanSamagry.com|Homepage';
                $data['catList'] = $this->UserM->get_catList();
                $data['products'] = $this->UserM->get_allProduct();               
		$this->load->view('front/index',$data);
	}
        public function login_page() 
        {
            $this->load->view('front/account-login');
        }
        public function login_page2() 
        {
            $data['title'] = 'AddhyyanSamagry.com|Seller-login';
            $data['catList'] = $this->UserM->get_catList();
            $this->load->view('front/loginpage2',$data);
        }
        
        public function register_user_data() 
        {
          $fname =  $this->input->post('reg-fn');
          $lname =  $this->input->post('reg-ln');
          $mail  =   $this->input->post('reg-email');
          $mobile = $this->input->post('reg-mobile');
          $pass = $this->input->post('reg-pass');
          $pass2 =$this->input->post('reg-confirm-pass');
           
          if($pass==$pass2)
            {   
                $pwd = md5($pass);
            }
//            $auth = $this->MainM->get_user_auth($mail);
//            if(!empty($auth))
//            {
//                redirect(base_url('account-loginPage?auth=yes'));
//            }
//            else{
            $res = $this->MainM->register_user_model($fname,$lname,$mail,$mobile,$pwd);
//           send email
//           =======================================
//           $userEmail = $mail;
//           $subject = "Registration Successfull!";
//           $text = "Welcome to MiniEcom v2 use email/phone as your username.'$mail'.and password is.'$pass'";
//           $this->htmlmail($text,$userEmail,$subject);
////           ==================================================
                if($res>0)  
                {
                    redirect(base_url('account-loginPage?register=yes'));
                }
                else
                {
                    redirect(base_url('account-loginPage?register=no'));
                }
            
//        }
        }
        
//        send email function
//==============================================================================
//        public function htmlmail($data,$userEmail,$subject) 
//        {
//            $config = array(
//                'protocol'=>'sendmail',
//                'smtp_host'=>'ssl://smtp.googlemail.com',
//                'smtp_port'=> 465,
//                'smtp_user'=> 'test@gmail.com',
//                'smtp_pass'=> '123',
//                'mailtype'=> 'html',
//                'charset'=> 'iso-8859-1',
//                );
//                $this->load->library('email',$config);
//                $this->email->set_newline('\r\n');
//                $this->email->from('test@gmail.com', 'MiniEcom v2-admin');
//                $this->email->to($userEmail);
//                $this->email->subject($subject);
////                $body = $this->load->view('front/application',$data,TRUE);
//                $body = $data;
//                $this->email->message($body);
//                $this->email->send();
//        }
////        ========================================================================
        public function register_seller_data() 
        {
          $fname =  $this->input->post('reg-fn');
          $lname =  $this->input->post('reg-ln');
          $mail =   $this->input->post('reg-email');
          $phone =   $this->input->post('reg-phone');
          $mobile =   $this->input->post('reg-mobile');
          $pass =   $this->input->post('reg-pass');
          $pass2 =     $this->input->post('reg-confirm-pass');
          $addr =   $this->input->post('reg-addr');
          $company =   $this->input->post('reg-company');
          $cat =   $this->input->post('reg-categories');
         
        if($pass==$pass2)
         {   
             $pwd = md5($pass);
         }
            
           $res = $this->MainM->register_seller_model($fname,$lname,$mail,$mobile,$phone,$pwd,$addr,$company,$cat);
                if($res>0)  
                {
                    redirect(base_url('seller-login-page?success=yes'));
                }
                else
                {
                    redirect(base_url('seller-login-page?error=yes'));
                }
        }
        
        public function about_page()
        {
            $this->load->view('front/about');
        }
}
