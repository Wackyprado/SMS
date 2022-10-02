<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class COR_con extends CI_Controller {
	
	
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
		$this->load->view('frontend/view_certificateOfreg',$data);
		$this->load->view('templates/footer/view_cor_footer');

	}

	public function request(){


		$first_name = $this->session->first_name;
		$last_name = $this->session->last_name;
		$middle_name = $this->session->middle_name;

		$data['full_name'] = $first_name . ' ' . $middle_name . ' ' . $last_name;
		$data['student_id'] = $this->session->student_id;
		$data['school_year'] = $this->input->post('school_year');
		$data['school_term'] = $this->input->post('school_term');

		$check = $this->cor_model->check($data);

		if ($check == "success") {
			$result = $this->email_model->sendrequest($data);
		}
		else{

			$result = "Failed to send request";

		}


		// if ($result == "success") {
		// 	$data['message'] = "Success";
		// 	$this->load->view('templates/header/view_home_header');
		// 	$this->load->view('templates/navbar');
		// 	$this->load->view('templates/message', $data);
		// 	$this->load->view('templates/footer/view_cor_footer');
		// 	// $data['message'] = "Failed";
		// 	// $this->load->view('templates/header/view_home_header');
		// 	// $this->load->view('templates/navbar');
		// 	// $this->load->view('templates/message', $data);
		// 	// $this->load->view('templates/footer/view_cor_footer');
		// }else{


		// 	$data['message'] = "Failed";
		// 	$this->load->view('templates/header/view_home_header');
		// 	$this->load->view('templates/navbar');
		// 	$this->load->view('templates/message', $data);
		// 	$this->load->view('templates/footer/view_cor_footer');
		// }


		echo json_encode($result);

		



	}
}

?>