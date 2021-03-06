<?php
class User_model extends CI_model{

	 public function register_user($user){

	 	if(empty($user['id'])){
	 		if (!$this->db->insert('users', $user)) {
				return false;
			}else{
				return true;
			}
	 	}else{

	 		$this->db->where('id', $user['id']);
			if(!$this->db->update('users',$user)){
				return false;
			}else{
				return true;
			}
	 	}
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

	 public function find_user($id){

	 	$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$id);

		if($query=$this->db->get()){
			 return $query->row_array();
		}else{
			return false;
		}

	 }

	 public function login_user($username,$password){

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
			$this->db->where('password',$password);

			if($query=$this->db->get()){
				 return $query->row_array();
			}else{
				return false;
			}
	 }

	 public function delete($id){

		$delete = $this->db->delete('users', array('id' => $id));

		if($delete){
			return true;
		}else{
			return false;
		}
	 }

	 public function email_check($username){

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
			$query=$this->db->get();

			if($query->num_rows()>0){
				return false;
			}else{
				return true;
			}
	 }
}


?>
