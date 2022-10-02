<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile_con extends CI_Controller {
	
	
	public function index(){


		$first_name = $this->session->first_name;
		$last_name = $this->session->last_name;
		$middle_name = $this->session->middle_name;

		$data['full_name'] = $first_name . ' ' . $middle_name . ' ' . $last_name;
		$data['student_id'] = $this->session->student_id;
		$data['course'] = $this->session->course;
		$data['course_avr'] = $this->session->course_avr;
		$data['department'] = $this->session->department;
		$data['email'] = $this->session->email;

		$this->load->view('templates/header/view_profile_header');
		$this->load->view('templates/nav_profile');
		$this->load->view('frontend/view_profile', $data);
		$this->load->view('templates/footer/view_profile_footer');

	}

	public function education(){


		$student_id = $this->session->student_id;

		$result = $this->Profile_model->fetch_educ($student_id);

		$data["full_name"] = $result->first_name . ' ' . $result->middle_name . ' ' . $result->last_name;
		$data["student_id"] = $result->id_number;
		$data["course"] = $result->course;
		$data["course_avr"] = $result->course_avr;
		$data["department"] = $result->department;
		$data["email"] = $result->email_address;
		$data["s_school"] = $result->s_school;
		$data["s_track_strand"] = $result->s_track_strand;
		$data["s_year"] = $result->s_year;
		$data["s_address"] = $result->s_address;
		$data["p_school"] = $result->p_school;
		$data["p_year"] = $result->p_year;
		$data["p_address"] = $result->p_address;






		$this->load->view('templates/header/view_profile_header');
		$this->load->view('templates/nav_profile');
		$this->load->view('frontend/view_profile_education', $data );
		$this->load->view('templates/footer/view_profile_education_footer');

	}

	public function family(){


		$first_name = $this->session->first_name;
		$last_name = $this->session->last_name;
		$middle_name = $this->session->middle_name;

		$data['full_name'] = $first_name . ' ' . $middle_name . ' ' . $last_name;
		$data['student_id'] = $this->session->student_id;
		$data['course'] = $this->session->course;
		$data['course_avr'] = $this->session->course_avr;
		$data['department'] = $this->session->department;
		$data['email'] = $this->session->email;

		$this->load->view('templates/header/view_profile_header');
		$this->load->view('templates/nav_profile');
		$this->load->view('frontend/view_profile_family', $data);
		$this->load->view('templates/footer/view_profile_family_footer');

	}

	public function fetch_data(){

		if ($this->input->is_ajax_request()) {
				$student_id = $this->session->student_id;
				$result = $this->Profile_model->fetch($student_id);

				// $data = array();

				// foreach ($result as $key => $value){
					
				// }

				echo json_encode($result);
		}
		else{
			echo "no direct access allowed";
		}
	}

	public function getfamily(){
		if ($this->input->is_ajax_request()) {
			$student_id = $this->session->student_id;
			$result = $this->Profile_model->getfamily($student_id);

			echo json_encode($result);
		}
		else{
			echo "no direct access allowed";
		}
	}

	// public function fetch_educ()
	// {
	// 	$student_id = $this->session->student_id;
	// 	$result = $this->Profile_model->fetch_educ($student_id);
	// 	echo json_encode($result);

	// }

}

?>