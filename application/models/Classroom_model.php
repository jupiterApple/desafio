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

}
?>
