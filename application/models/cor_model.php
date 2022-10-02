<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class cor_model extends CI_Model{

	public function get($data){
		$id = $data['id'];
		$year = $data['school_year'];
		$term = $data['school_term'];

		$query = $this->db->query("SELECT * FROM student_grades a, student_info b WHERE
									( a.school_year = '$year' and a.term = '$term')
									and (a.id_number='$id' and a.id_number = b.id_number) ");
		$result = $query->result();
		$number = $query->num_rows();

		if ($number > 0) {
			$data = array();

			foreach($result as $row){
				$data[] = array(
					'code' => $row->code,
					'description' => $row->description,
					'units' => $row->units,
					'year_level' => $row->year_level,
					'id' => $row->id_number,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'course_avr' => $row->course_avr,

					'school_year' => $row->school_year,
					'school_term' => $row->term


				);
			}
		}
		else{
			$data = "error";
		}

		return $data;

	}

	// public function getinfo($data){
	// 	$id = $data['id'];

	// 	$query = $this->db->query("SELECT * FROM student_info WHERE
	// 								id_number='$id'");
	// 	$result = $query->result();
	// 	$number = $query->num_rows();

	// 	if ($number > 0) {
	// 		$data = array();

	// 		foreach($result as $row){
	// 			$data[] = array(
	// 				'id' => $row->id_number,
	// 				'first_name' => $row->first_name,
	// 				'last_name' => $row->last_name,
	// 				'course_avr' => $row->course_avr,
	// 			);
	// 		}
	// 	}

	// 	return $data;

	public function check($data){

		$id = $data['student_id'];
		$school_year = $data['school_year'];
		$school_term = $data['school_term'];

		$query = $this->db->query("SELECT * FROM student_grades WHERE
									(school_year = '$school_year' and term = '$school_term')
									and id_number='$id'");

		$number = $query->num_rows();

		if ($number > 0) {
			$data = "success";
		}else{
			$data = "failed";
		}

		return $data;
	}
}
?>