<?php
defined('BASEPATH') OR exit('No direct access allowed');

class My_student_ledger_con extends CI_Controller{
	
	public function index(){

		$f_name =  $this->session->first_name;
		$m_name = $this->session->middle_name;
		$l_name = $this->session->last_name;

		$data['fullname'] = $f_name . ' ' . $m_name . ' ' . $l_name;
		$data['student_id'] = $this->session->student_id;
		$data['course'] = $this->session->course;
		$data['course_avr'] = $this->session->course_avr;

		$this->load->view('templates/header/view_home_header');
		$this->load->view('templates/navbar');
		$this->load->view('frontend/view_studentLedger',$data);
		$this->load->view('templates/footer/view_home_footer');

	}
}

?>