<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class subject_chart_model extends CI_Model{


	public function fetch_subject($course){
		
		$data = array();

		$query = $this->db->query("SELECT * FROM subjects where course = '$course'");

		$result = $query->result();
		$number = $query->num_rows();

		if ($number > 0 ) {
			foreach($result as $row){
				$data[] = array(
					'code' => $row->code,
					'description' => $row->description,
					'unit' => $row->unit,
					'semester' => $row->semester,
					'year' => $row->year,
					'course' => $row->course,
				);
			}
		}
		// rsort($data);
		return $data;

	}


}



?>