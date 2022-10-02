<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin_con extends CI_Controller{

	public function validateUser(){



		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');


		$result = $this->Signin_model->validateUser($data);


		if($result == false){
			http_response_code(400);
			$data = array("res" => "Error", "message" => "Login failed");
		}
		else{
			
			

			 foreach($result as $key => $value){
				 $user_data = array(
					 'student_id' => $value->id_number,
					 'first_name' => $value->first_name,
					 'last_name' => $value->last_name,
					 'middle_name' => $value->middle_name,
					 'course' => $value->course,
					 'course_avr' => $value->course_avr,
					 'department' => $value->department,
					 'email' => $value->email_address,
					 'loggin_in' => true
				 );
			 }

			$this->session->set_userdata($user_data);

			$data = $user_data;

			
		}
	
	echo json_encode($data);

	}

	public function log_out(){
        $this->session->unset_userdata('loggin_in');

        redirect(base_url());
	}



    
}

?>