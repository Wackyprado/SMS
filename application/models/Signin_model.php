<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Signin_model extends CI_Model{

	public function validateUser($data){

		$username = $data['username'];
		$password = $data['password'];

		$query = $this->db->query("SELECT * FROM student_info
									WHERE username = '$username' and password = '$password'");
		
		$num_rows = $query->num_rows();


		if ($num_rows > 0) {
			$data = $query->result();
		}
		else{
			$data = false;
		}

		return $data;
	}



}



?>