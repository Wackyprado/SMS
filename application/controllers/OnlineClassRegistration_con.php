<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class OnlineClassRegistration_con extends CI_Controller{

	public function index(){

		$f_name =  $this->session->first_name;
		$m_name = $this->session->middle_name;
		$l_name = $this->session->last_name;

		$data['fullname'] = $f_name . ' ' . $m_name . ' ' . $l_name;
		$data['student_id'] = $this->session->student_id;
		$data['course'] = $this->session->course;
		$data['course_avr'] = $this->session->course_avr;

		$this->load->view('templates/header/view_online_reg');
		$this->load->view('templates/navbar');
		$this->load->view('frontend/view_onlineClassRegistration',$data);
		$this->load->view('templates/footer/OnlineClassRegistration_footer');

	}

	public function fetch_subject(){

		$student_id = $this->session->student_id;

		$data['year_level'] = $this->input->post('year_level');
		$data['school_year'] = $this->input->post('school_year');
		$data['school_term'] = $this->input->post('school_term');

		$checkyear = $this->online_reg_model->check($student_id);

		if ($checkyear == false) {
			$return = "error";
		}
		else{
			$row = $checkyear[0];
			$year = $row->year_lvl;
			$sem = $row->current_sem;

			if ($year == '1st-year') {
				$n = 1;

				if ($n == $data['year_level']) {
					if ($sem == $data['school_term'] ) {
					$return = "error";
					}
					else {
						$return = "success";
					}
				}else{
					$return = "error";
				}
			}
			else if($year == '2nd-year'){
				$n = 2;

				if ($n == 	$data['year_level']) {
					if ($sem == $data['school_term'] ) {
					$return = "error";
					}
					else {
						$return = "success";
					}
				}else{
					$return = "error";
				}
			}
			else if($year == '3rd-year'){
				$n = 3;

				if ($n == 	$data['year_level']) {
					if ($sem == $data['school_term'] ) {
					$return = "error";
					}
					else {
						$return = "success";
					}
				}else{
					$return = "error";
				}
			}else{
				$n = 4;
				if ($n == 	$data['year_level']) {
					if ($sem == $data['school_term'] ) {
						$return = "error";
					}
					else {
						$return = "success";
					}
				}else{
					$return = "error";
				}
			}


			$data['year_level'] = $row->year_lvl;
			if ($return == "success" ) {
				$result = $this->online_reg_model->fetch_subject($data);

			}
			else{
				$result = "error";
			}

		}


		echo json_encode($result);

	}

	public function request(){

		$data['school_term'] = $this->input->post('school_term');
		$data['school_year'] = $this->input->post('school_year');
		$data['year_level'] = $this->input->post('year_level');
		$data['id'] = $this->session->student_id;
		$data['fullname'] = $this->session->first_name . ' ' . $this->session->last_name;
		

		$email = $this->email_model->online_class_reg($data);

		echo json_encode($email);

	}
}
?>