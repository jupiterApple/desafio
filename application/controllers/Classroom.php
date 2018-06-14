<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classroom extends CI_Controller {

   public function __construct(){

      parent::__construct();

      $this->load->helper('url');
      $this->load->model('classroom_model');
      $this->load->model('classroomReservation_model');
      $this->load->library('session');
   }

   public function index(){

      $this->load->view("register.php");
   }

   public function list(){

      $classrooms = $this->classroom_model->list_classrooms();

      foreach ($classrooms as $key => $value) {

         $hora = $classrooms[$key]['hour_reserved'];
         $hora = date('H:i:s', strtotime($hora.'+1 hour'));

          if(date('H:i:s') > $hora && $classrooms[$key]['status'] == false){
            $classrooms[key]['status'] = true;
            $update = $this->classroomReservation_model->update_reservation($classrooms[key]['id']);

            if(!update){
               $this->session->set_flashdata('error_msg', 'Não foi possível carregar a lista de salas, tente novamente.');
            }
         }
      }

      $data['classrooms'] = $classrooms;

     $this->load->view("classrooms/list.php", $data);
   }

   public function add($id){

      if($id){
         $data['classroom'] = (object) $this->classroom_model->find_classroom($id);
      }

      $this->load->view("classrooms/add.php", $data);
   }

   public function register(){

      $id_user = $this->session->userdata('id');

      $classroom = array(
         'id'=>$this->input->post('id'),
         'name'=>$this->input->post('name')
      );

      $name_check = $this->classroom_model->name_check($classroom['name']);

      if($name_check){
         $id_classroom = $this->classroom_model->register_classroom($classroom);

         if($id_classroom){

            if(empty($classroom['id'])){

               $times = $this->classroomReservation_model->get_hours_range(28800, 61200, 3600, 'H:i:s');

               foreach ($times as $key => $value) {

                  $classroomReservation = array(
                     'id'=> '',
                     'id_classroom'=> $id_classroom,
                     'id_user'=> $id_user,
                     'hour_reserved'=> $value
                  );

                  $this->classroomReservation_model->register($classroomReservation);
                  unset($classroomReservation);
               }
            }

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
