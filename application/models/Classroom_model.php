<?php
class Classroom_model extends CI_model{

	public function list_classrooms(){

		 $this->db->select('*');
		 $this->db->from('classrooms');

			if($query=$this->db->get()){
				 return $query->result_array();
			}else{
				 return false;
			}
	 }

	public function find_classroom($id){

	 	$this->db->select('*');
		$this->db->from('classrooms');
		$this->db->where('id',$id);

		if($query=$this->db->get()){
			 return $query->row_array();
		}else{
			return false;
		}
	 }

	 public function name_check($name){

			$this->db->select('*');
			$this->db->from('classrooms');
			$this->db->where('name',$name);
			$query=$this->db->get();

			if($query->num_rows()>0){
				return false;
			}else{
				return true;
			}
	 }

	 public function register_classroom($classroom){

	 	if(empty($classroom['id'])){
	 		if (!$this->db->insert('classrooms', $classroom)) {
				return false;
			}else{
				$id = $this->db->insert_id();
				return $id;
			}
	 	}else{

	 		$this->db->where('id', $classroom['id']);
			if(!$this->db->update('classrooms',$classroom)){
				return false;
			}else{
				return true;
			}
	 	}
	 }

}
?>
