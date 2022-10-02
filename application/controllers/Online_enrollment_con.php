<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Online_enrollment_con extends CI_controller{
	
	public function index(){

		$this->load->view('templates/header/view_home_header');
		$this->load->view('templates/navbar');
		$this->load->view('frontend/view_onlineEnrollment');
		$this->load->view('templates/footer/view_home_footer');

	}
}

?>