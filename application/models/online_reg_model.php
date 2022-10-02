<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class online_reg_model extends CI_Model{

	public function check($id){

		$query  = $this->db->query("SELECT year_lvl,current_sem FROM student_info WHERE id_number='$id'");

		$result = $query->result();

		$number = $query->num_rows();

		if ($number > 0) {
			$data = $result;
		}
		else
		{
			$data = false;
		}

		return $data;
	}

	public function fetch_subject($formdata){

		$sem = $formdata['school_term'];
		$year = $formdata['year_level'];

		$query  = $this->db->query("SELECT * FROM subjects WHERE year='$year' and semester ='$sem'");

		$result = $query->result();

		$number = $query->num_rows();

		return $result;

	}

}
?>