<?php
class User_model extends CI_model{


   public function register_user($user){

      $this->db->insert('user', $user);
   }

   public function list_users(){

     $this->db->select('*');
     $this->db->from('users');

      if($query=$this->db->get()){
         return $query->result_array();
      }else{
         return false;
      }
   }

   public function login_user($email,$pass){

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('username',$email);
      $this->db->where('password',$pass);

      if($query=$this->db->get()){
         return $query->row_array();
      }else{
        return false;
      }
   }
   public function email_check($email){

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('email',$email);
      $query=$this->db->get();

      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
   }
}


?>
