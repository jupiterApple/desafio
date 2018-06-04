<?php
class Company_model extends CI_model{

   public function get_db_name($id_company){

      $this->db->select('db_name');
      $this->db->from('companys');
      $this->db->where('id',$id_company);

      if($query=$this->db->get()){
         return $query->first_row();
      }else{
         return false;
      }
   }
}
?>
