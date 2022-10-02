<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class subject_chart_con extends CI_Controller {
	
	
	public function index(){

		$first_name = $this->session->first_name;
		$last_name = $this->session->last_name;
		$middle_name = $this->session->middle_name;

		$data['fullname'] = $first_name . ' ' . $middle_name . ' ' . $last_name;
		$data['student_id'] = $this->session->student_id;
		$data['course'] = $this->session->course;
		$data['course_avr'] = $this->session->course_avr;
		$data['department'] = $this->session->department;
		$data['email'] = $this->session->email;
		$data['year_lvl'] = 'Fourth Year';


		$this->load->view('templates/header/view_home_header');
		$this->load->view('templates/navbar');
		$this->load->view('frontend/view_subject_chart',$data);
		$this->load->view('templates/footer/view_subject_chart_footer');

	}

	public function fetch_subject(){

		$data = $this->session->course_avr;
		$result = $this->subject_chart_model->fetch_subject($data);

		echo json_encode($result);
	}
}

?>