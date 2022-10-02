<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class view_grades_model extends CI_Model{

	public function fetch_grades($formdata){

		$school_year = $formdata['school_year'];
		$school_term = $formdata['school_term'];
		$student_id = $formdata['student_id'];
		$data = array();
		$query = $this->db->query("SELECT * FROM student_grades WHERE (school_year = '$school_year' and term='$school_term') 
								and  id_number='$student_id'");

		$result = $query->result();
		$number = $query->num_rows();

		if ($number > 0 ) {
			foreach($result as $row){
				$data[] = array(
					'code' => $row->code,
					'description' => $row->description,
					'units'=> $row->units,
					'midterm' => $row->midterm,
					'final' => $row->final
				);
			}
		}


		return $data;
	}


}


  ?>