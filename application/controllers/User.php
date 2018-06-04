<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct(){

      parent::__construct();

   	$this->load->helper('url');
      $this->load->model('user_model');
   	$this->load->model('company_model');
      $this->load->library('session');
   }

   public function index()
   {
   $this->load->view("register.php");
   }

   public function register_user(){

      $user=array(
         'user_name'=>$this->input->post('user_name'),
         'user_email'=>$this->input->post('user_email'),
         'user_password'=>md5($this->input->post('user_password')),
         'user_age'=>$this->input->post('user_age'),
         'user_mobile'=>$this->input->post('user_mobile')
        );
      print_r($user);

      $email_check=$this->user_model->email_check($user['user_email']);

      if($email_check){
         $this->user_model->register_user($user);
         $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
         redirect('user/login_view');
      }else{
         $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
         redirect('user');
      }
   }

   public function login(){

     $this->load->view("users/login.php");

   }

   function login_user(){

      $user_login=array(
         'username'=>$this->input->post('username'),
         'password'=>md5($this->input->post('password'))
      );

      $data = $this->user_model->login_user($user_login['username'],$user_login['password']);

      if($data){

         $database = $this->company_model->get_db_name($data['id_company']);
         $this->db->db_select($database->db_name);
         $teste = $this->user_model->list_users();
         var_dump($teste);


         $this->session->set_userdata('id',$data['id']);
         $this->session->set_userdata('username',$data['username']);
         $this->session->set_userdata('first_name',$data['first_name']);

         $this->load->view('users/profile.php');

      }else{
         $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
         $this->load->view("users/login.php");
      }
   }

   // function profile(){

   //    $this->load->view('profile.php');
   // }
   public function user_logout(){

     $this->session->sess_destroy();
     redirect('user/login', 'refresh');
   }

}

?>
