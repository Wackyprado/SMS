<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class View_Grades_con extends CI_Controller {
	
	
	public function index(){

		$f_name =  $this->session->first_name;
		$m_name = $this->session->middle_name;
		$l_name = $this->session->last_name;

		$data['fullname'] = $f_name . ' ' . $m_name . ' ' . $l_name;
		$data['student_id'] = $this->session->student_id;
		$data['course'] = $this->session->course;
		$data['course_avr'] = $this->session->course_avr;

		$this->load->view('templates/header/view_grades_header');
		$this->load->view('templates/navbar');
		$this->load->view('frontend/view_grades',$data);
		$this->load->view('templates/footer/view_grades_footer');

	}

	public function fetch_grades(){

		$data['school_year'] = $this->input->post('school_year');
		$data['school_term'] = $this->input->post('school_term');
		$data['student_id'] = $this->session->student_id;

		$result = $this->view_grades_model->fetch_grades($data);

		if ($result == false) {
			http_response_code(400);
		}else{
			$data = $result;
		}

		echo json_encode($data);

	}
}

?>