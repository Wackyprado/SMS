<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class settings_model extends CI_Model{

	public function change_password($formdata){

		$current_password=$formdata['current_password'];
		$new_password=$formdata['new_password'];
		$confirm_password=	$formdata['confirm_password'];
		$id=$formdata['id'];

		$query = $this->db->query("SELECT * FROM student_info WHERE id_number='$id' and password='$current_password'");
		$number = $query->num_rows();

		if ($number > 0) {
			$this->db->trans_start();
			$this->db->query("UPDATE student_info SET password='$confirm_password' WHERE id_number ='$id'");
			$this->db->trans_complete();

			if ($this->db->trans_status() === false) {
				$data = "error";
			}else{
				$data = "success";
			}
		}
		else{
			$data = "error";
		}

		return $data;

	}



}



?>