<?php
class ClassroomReservation_model extends CI_model{

	function get_hours_range( $start = 0, $end = 86400, $step = 3600, $format = 'g:i a' ) {
        $times = array();
        foreach ( range( $start, $end, $step ) as $timestamp ) {
                $hour_mins = gmdate( 'H:i:s', $timestamp );
                if ( ! empty( $format ) )
                        $times[] = gmdate( $format, $timestamp );
                else $times[] = $hour_mins;
             $i++;
        }
        return $times;
	}

	public function register($classroomReservation){

	 	if(empty($classroomReservation['id'])){
	 		if (!$this->db->insert('classrooms_reservations', $classroomReservation)) {
				return false;
			}else{
				return true;
			}
	 	}
	 }
}
?>
