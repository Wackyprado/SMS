<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_con extends CI_Controller {

	public function index()
	{

		if ($this->session->loggin_in == true) {
			$this->load->view('templates/header/view_home_header');
			$this->load->view('templates/nav_view');
			$this->load->view('frontend/view_students');
			$this->load->view('templates/footer/view_home_footer');
		}else{
			$this->load->view('templates/header/view_signin_header');
			$this->load->view('frontend/view_signin');
			$this->load->view('templates/footer/view_signin_footer');
		}
		
	
	}
}
?>
