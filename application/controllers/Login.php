<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 
	public function index()
	{

		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
	 
 
		if ($this->form_validation->run() == FALSE) {


		$this->load->view('header5');
		$this->load->view('header4');
		$this->load->view('login');
		$this->load->view('footer1');

		}else{


			$result=$this->db->where('Email',$this->input->post('Email'))->where('Password',$this->input->post('Password'))->get('tbl_user')->result_array();

			if($result){


				$sdata['Email']=$result[0]['Email'];
				$sdata['Name']=$result[0]['Name'];
				$sdata['id']=$result[0]['id'];
				$sdata['Type']=$result[0]['Type'];

				$this->session->set_userdata($sdata);

				if($result[0]['Type']=='Admin'){

						redirect('Admin');

				}else{

					redirect('Welcome');
				}

			
			}else{


			$message='<div class="alert alert-danger">Wrong Username or Password</div>';

			$this->session->set_flashdata('message',$message);


					redirect('Login');
			}
			




		}


	}	
	
	
	
	
}
