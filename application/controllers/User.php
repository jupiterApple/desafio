<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct(){

      parent::__construct();

      $this->load->helper('url');
      $this->load->model('user_model');
      $this->load->library('session');
   }

   public function index()
   {
      $this->load->view("register.php");
   }

   public function register_user(){

      $user=array(
         'first_name'=>$this->input->post('first_name'),
         'last_name'=>$this->input->post('last_name'),
         'username'=>$this->input->post('username'),
         'password'=>md5($this->input->post('password'))
        );

      $email_check = $this->user_model->email_check($user['user_email']);

      if($email_check){
         if($this->user_model->register_user($user)){
            $this->session->set_flashdata('success_msg', 'Registrado com sucesso');
         }
         redirect('user/login');
      }else{
         $this->session->set_flashdata('error_msg', 'Erro ao registrar, tente novamente.');
         redirect('user');
      }
   }

   public function login(){

     $this->load->view("users/login.php");

   }

   public function list(){

     $this->load->view("users/list.php");

   }


   function login_user(){

      $user = array(
         'username'=>$this->input->post('username'),
         'password'=>md5($this->input->post('password'))
      );

      $data = $this->user_model->login_user($user['username'],$user['password']);

      if($data){

         $this->session->set_userdata('id',$data['id']);
         $this->session->set_userdata('username',$data['username']);
         $this->session->set_userdata('first_name',$data['first_name']);

         $this->load->view('users/profile.php');

      }else{
         $this->session->set_flashdata('error_msg', 'Usuário ou senha incorretos,tente novamente.');
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
