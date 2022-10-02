<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Print_Exam_Permit_con extends CI_Controller {
	
	
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
		$this->load->view('frontend/view_permit',$data);
		$this->load->view('templates/footer/view_exam_permit_footer');

	}

	public function request_permit(){

		$data['id'] = $this->input->post('id');
		$data['full_name'] = $this->input->post('fullname');

		$result = $this->email_model->request_permit($data);


		echo json_encode($result);

		

	}
}

?>