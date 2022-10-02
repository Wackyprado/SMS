<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generate_cor_con extends CI_Controller {

        function generate($id,$school_year,$school_term){

        $data = array(
            'id' => $id,
            'school_year' => $school_year,
            'school_term'=> $school_term
        );



        $result = $this->cor_model->get($data);

        $js['json'] = json_encode($result);
        $this->load->library('pdf');
        $html=$this->load->view('templates/view_generate_cor', $js,true);
        $this->pdf->createPDF($html, 'mypdf', false);

        //  $this->load->library('pdf');
        // $html = $this->load->view('templates/view_generate_cor', [], true);
        // $this->pdf->createPDF($html, 'mypdf', false);
        }

        function get(){

            $data['id'] = $this->input->post('id');
            $data['school_year'] = $this->input->post('school_year');
            $data['school_term'] = $this->input->post('school_term');

            $result = $this->cor_model->get($data);

            echo json_encode($result);


        }

    }
?>