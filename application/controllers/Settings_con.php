<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Settings_con extends CI_Controller {
	
	
	public function index(){

		$this->load->view('templates/header/view_home_header');
		$this->load->view('templates/nav_settings');
		$this->load->view('frontend/view_settings');
		$this->load->view('templates/footer/view_settings_footer');

	}

	public function change_password(){
		$data['current_password']=$this->input->post('current_password');
		$data['new_password']=$this->input->post('new_password');
		$data['confirm_password']=$this->input->post('confirm_password');
		$data['id'] = $this->session->student_id;

		if ($data['new_password'] == $data['confirm_password']) {
			$result = $this->settings_model->change_password($data);

			if ($result == "success") {
				$data  = "success";
			}
			else{
				$data  = "current password is incorrect";
			}
		}else{
			$data  = "new and confirm password not match";
		}


	echo json_encode($data);
	}
}

?>