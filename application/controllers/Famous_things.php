
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
	public function index()
	{

		$data['title']='Show The Users List';


		$data['user']=$this->db->get('tbl_famous_things')->result_array();

		$this->load->view('add-user',$data);
	}



	public function add_user()
	{

		$data['title']='Add Famous Things';


		$this->form_validation->set_rules('Famous_things_name', 'Famous Things Name', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('Picture', 'Picture', 'required');
		$this->form_validation->set_rules('Place_id', 'Place Id', 'required');
		


	

		if ($this->form_validation->run() == FALSE) {

			 $this->load->view('add-user',$data);

		} else {


			$idata['Famous_things_name']=$this->input->post('Famous_things_name');
			$idata['Description']=$this->input->post('Description');
			$idata['Picture']=$this->input->post('Picture');
			$idata['Place_id']=$this->input->post('Place_id');
		

			$this->db->insert('tbl_famous_things',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}


	public function view_user()
	{

		$data['title']='Famous Things';

	
		
		$data['user']=$this->db->get('tbl_famous_things')->result_array();

		$this->load->view('show-user',$data);
	}

	
	
		public function edit_user($id)
	{

		$data['title']='Edit Famous Things';


		$this->form_validation->set_rules('Famous_things_name', 'Famous Things Name', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('Picture', 'Picture', 'required');
		$this->form_validation->set_rules('Place_id', 'Place Id', 'required');
	
	
		
 




	

		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('F_id',$id)->get('tbl_famous_things')->result_array();


			 $this->load->view('edit-user',$data);

		} else {


			$idata['Famous_things_name']=$this->input->post('Famous_things_name');
			$idata['Description']=$this->input->post('Description');
			$idata['Picture']=$this->input->post('Picture');
			$idata['Place_id']=$this->input->post('Place_id');
		

			$old_image=$this->db->where('F_id',$id)->get('tbl_famous_things')->result_array();


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

			$this->db->where('F_id',$id)->update('tbl_famous_things',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_user($id)
	{


		$old_image=$this->db->where('F_id',$id)->get('tbl_famous_things')->result_array();

		if(!empty($old_image[0]['user_image'])){

		unlink('img_saver/'.$old_image[0]['user_image'].'');
		}

			  
		$this->db->where('F_id',$id)->delete('tbl_famous_things');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}







}
