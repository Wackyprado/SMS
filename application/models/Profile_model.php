<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_model extends CI_Model{

	public function fetch($student_id){

		$query = $this->db->query("SELECT * FROM student_info a, student_req b WHERE a.id_number = '$student_id' 
									and a.id_number = b.id_number");

		$data = $query->row();

		return $data;
	}

	public function fetch_educ($student_id){
		$query = $this->db->query("SELECT * FROM student_info a, student_education b WHERE a.id_number = '$student_id'
									and a.id_number = b.id_number ");

		$data = $query->row();

		return $data;
	}

	public function getfamily($student_id){
		$data = array();
		$query = $this->db->query("SELECT * FROM student_family a, student_info b WHERE a.id_number='$student_id'
									and a.id_number = b.id_number");

		$result = $query->result();
		$number = $query->num_rows();

		if ($number > 0 ) {
			foreach($result as $row){
				$data[] = array(
					'p_name' => $row->p_name,
					'relationship' => $row->relationship,
					'occupation' => $row->occupation,
					'p_address' => $row->p_address,
					'p_mobile_no' => $row->p_mobile_no,
					'contact_on_emergency' => $row->contact_on_emergency,
					'authorize_access' => $row->authorize_access
				);
			}
		}

		return $data;
	}



}



?>