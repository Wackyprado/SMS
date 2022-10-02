<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class email_con extends CI_Controller{

	public function sendmail($id,$school_year,$school_term){

		$data = array(
			'id' => $id,
			'school_year' => $school_year,
			'school_term' => $school_term
		);

		$result = $this->email_model->requestconfirm($data);

		if ($result=="success") {
				$data['message'] = 'The requested COR has been approved';
				$this->load->view('templates/header/view_email_confirm_header');
				$this->load->view('frontend/view_email_confirm',$data);
				$this->load->view('templates/footer/view_email_confirm_footer');
		}else{

			$data['message'] = 'Oppss Something Went Wrong';
			$this->load->view('templates/header/view_email_confirm_header');
			$this->load->view('frontend/view_email_confirm',$data);
			$this->load->view('templates/footer/view_email_confirm_footer');

		}

		echo json_encode($result);


	}

}

?>