<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassroomReservation extends CI_Controller {

   public function __construct(){

      parent::__construct();

      $this->load->helper('url');
      $this->load->model('classroomReservation_model');
      $this->load->library('session');
   }

   public function index(){

      $this->load->view("register.php");
   }

   public function list(){

      $data['Reservations'] = (object) $this->classroomReservation_model->list_classrooms();

     $this->load->view("classroomsReservations/list.php", $data);
   }

   public function add($id){

      if($id){
         $data['classroom'] = (object) $this->classroom_model->find_classroom($id);
      }

      $this->load->view("classrooms/add.php", $data);
   }

   public function register(){

      $classroom = array(
         'id'=>$this->input->post('id'),
         'name'=>$this->input->post('name')
      );

      $name_check = $this->classroom_model->name_check($classroom['name']);

      if($name_check){
         if($this->classroom_model->register_classroom($classroom)){
            $this->session->set_flashdata('success_msg', 'Registrado com sucesso');
         }
         redirect('classroom/list');
      }else{
         $this->session->set_flashdata('error_msg', 'Nome de sala já existe, favor tente outro.');
         redirect('classroom/list');
      }
   }
}

?>
