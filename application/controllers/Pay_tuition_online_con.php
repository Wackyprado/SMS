<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Pay_tuition_online_con extends CI_Controller {
	
	
	public function index(){

		$this->load->view('templates/header/view_home_header');
		$this->load->view('templates/navbar');
		$this->load->view('frontend/view_tuitionOnline');
		$this->load->view('templates/footer/view_home_footer');

	}
}

?>