<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class email_model extends CI_Model{


	public function sendrequest($data){


		try {
            $config = array (
                'protocol' => 'smtp',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'crlf' => "\r\n",
                'newline' => "\r\n", //must have for office365!
                'priority' => 3,
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '465',
                'smtp_crypto' => 'ssl',
                'smtp_user' => 'wackyprado1020@gmail.com',
                'smtp_pass' => 'Myellmoo24.',
                'smtp_timeout' => 60
                );   


            $this->email->initialize($config);
            
            $this->email->from("wackyprado1020@gmail.com", "Request COR");
            $this->email->to("canalmarkanthony.spccqc@gmail.com"); 
            // $this->email->bcc("canalmarkanthony.spccqc@gmail.com");

            $this->email->subject("Request COR");
            $this->email->message($this->load->view("templates/email",$data,true));  
            // $this->email->message("This is message");  

            
            if($this->email->send()){
                $flag = "success";
            }
            else {
                $flag = $this->email->print_debugger();
            }

        }catch (Excemption $e){
        	$flag = "error";
        }

            return $flag;

	}

    public function requestconfirm($formData){

        $id = $formData['id'];

        $query = $this->db->query("SELECT * FROM student_info where id_number = '$id'");

        $result = $query->result();
        $num_rows = $query->num_rows();

        $data = array();


        if ($num_rows > 0 ) {
            foreach($result as $row){
                $data[] = array(
                    'email' => $row->email_address,
                    'first_name' =>$row->first_name,
                    'last_name' =>$row->last_name
                );
            }
        }

        $row = $data[0];
        $formData['fullname'] = $row['first_name'] . ' ' . $row['last_name'];
        $email = $row['email'];
    

        try {
            $config = array (
                'protocol' => 'smtp',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'crlf' => "\r\n",
                'newline' => "\r\n", //must have for office365!
                'priority' => 3,
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '465',
                'smtp_crypto' => 'ssl',
                'smtp_user' => 'wackyprado1020@gmail.com',
                'smtp_pass' => 'Myellmoo24.',
                'smtp_timeout' => 60
                );   


            $this->email->initialize($config);
            
            $this->email->from("wackyprado1020@gmail.com", "Request COR");
            $this->email->to($email); 
            // $this->email->bcc("canalmarkanthony.spccqc@gmail.com");

            $this->email->subject("Request Confirmed");
            $this->email->message($this->load->view("templates/email_cor_req",$formData,true));  
            // $this->email->message("This is message");  

            
            if($this->email->send()){
                $flag = "success";
            }
            else {
                $flag = $this->email->print_debugger();
            }

        }catch (Excemption $e){
            $flag = "error";
        }

            return $flag;


    }


    public function online_class_reg($formdata){


        try {
            $config = array (
                'protocol' => 'smtp',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'crlf' => "\r\n",
                'newline' => "\r\n", //must have for office365!
                'priority' => 3,
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '465',
                'smtp_crypto' => 'ssl',
                'smtp_user' => 'wackyprado1020@gmail.com',
                'smtp_pass' => 'Myellmoo24.',
                'smtp_timeout' => 60
                );   


            $this->email->initialize($config);
            
            $this->email->from("wackyprado1020@gmail.com", "Request COR");
            $this->email->to("canalmarkanthony.spccqc@gmail.com"); 
            // $this->email->bcc("canalmarkanthony.spccqc@gmail.com");

            $this->email->subject("Request Confirmed");
            $this->email->message($this->load->view("templates/email_cor_req",$formData,true));  
            // $this->email->message("This is message");  

            
            if($this->email->send()){
                $flag = "success";
            }
            else {
                $flag = $this->email->print_debugger();
            }

        }catch (Excemption $e){
            $flag = "error";
        }

            return $flag;

    }

    public function request_permit($formdata){

        try {
            $config = array (
                'protocol' => 'smtp',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'crlf' => "\r\n",
                'newline' => "\r\n", //must have for office365!
                'priority' => 3,
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '465',
                'smtp_crypto' => 'ssl',
                'smtp_user' => 'wackyprado1020@gmail.com',
                'smtp_pass' => 'Myellmoo24.',
                'smtp_timeout' => 60
                );   


            $this->email->initialize($config);
            
            $this->email->from("wackyprado1020@gmail.com", "Request Exam Permit");
            $this->email->to("canalmarkanthony.spccqc@gmail.com"); 
            // $this->email->bcc("canalmarkanthony.spccqc@gmail.com");

            $this->email->subject("Request Exam Permit");
            $this->email->message($this->load->view("templates/email_request_permit",$formdata,true));  
            // $this->email->message("This is message");  

            
            if($this->email->send()){
                $flag = "success";
            }
            else {
                $flag = $this->email->print_debugger();
            }

        }catch (Excemption $e){
            $flag = "error";
        }

            return $flag;

    }


}



?>