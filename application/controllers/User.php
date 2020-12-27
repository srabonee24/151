
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
	public function index()
	{

		$data['title']='Show The Users List';


		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('add-user',$data);
	}



	public function add_user()
	{

		$data['title']='Add User';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address');
		$this->form_validation->set_rules('id', 'Id');
		


		//$this->form_validation->set_message('validate_age', 'The %s is not allowed');

		$this->form_validation->set_message('validate_age', 'Your age is not allowed');
		

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}

	

		if ($this->form_validation->run() == FALSE) {

			 $this->load->view('add-user',$data);

		} else {


			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');
		    $idata['address']=$this->input->post('address');
			$idata['id']=$this->input->post('id');
		

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}


	public function view_user()
	{

		$data['title']='Like Function';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('show-user',$data);
	}

	
	
		public function edit_user($id)
	{

		$data['title']='Edit User';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address');
		$this->form_validation->set_rules('id', ' Id');
	
		
 
//  min_length[11] |  max_length[11] 


		$this->form_validation->set_message('validate_blood', 'The %s is Invalid');

		function validate_blood($var){

			if($var=='O+'||$var=='A+'||$var=='B+'||$var=='AB+'||$var=='O-'||$var=='B-'||$var=='AB-'||$var=='A-'){
					return true;
			    }else{

			    	return false;
			    }


		}


		//$this->form_validation->set_message('validate_age', 'The %s is not allowed');

		$this->form_validation->set_message('validate_age', 'Your age is not allowed');
		//$this->form_validation->set_message('validate_age', 'আপনার বায়স গ্রহণ যোগ্য নয়');

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}

	

		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();


			 $this->load->view('edit-user',$data);

		} else {


			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');
			$idata['password']=$this->input->post('password');
			$idata['address']=$this->input->post('address');
			$idata['id']=$this->input->post('id');

			$old_image=$this->db->where('id',$id)->get('tbl_user')->result_array();


			//FILE UPLOAD CODE// 

			if(!empty($_FILES) && ($_FILES['user_image']['name'])){
			

			  $config['upload_path'] = 'img_saver/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('user_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('User');
			 } else {
			  $upload_info = $this->upload->data();
			  $post_image = $upload_info['file_name'];

			  $idata['user_image']=$post_image;


			  if(!empty($old_image[0]['user_image'])){

			  	unlink('img_saver/'.$old_image[0]['user_image'].'');
			  }

			 }

			}else{
			
			$message='<div class="alert alert-danger">Please Add Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('User/edit_user/'.$id);

			}

			$this->db->where('id',$id)->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_user($id)
	{


		$old_image=$this->db->where('id',$id)->get('tbl_user')->result_array();

		if(!empty($old_image[0]['user_image'])){

		unlink('img_saver/'.$old_image[0]['user_image'].'');
		}

			  
		$this->db->where('id',$id)->delete('tbl_user');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}







}
