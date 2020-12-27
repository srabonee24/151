<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 function __construct() {

        parent::__construct();

		date_default_timezone_set('Asia/Dhaka');
		
        if($this->session->userdata('Type')!='Admin'){
			redirect('Welcome');
		}else{
		
		}


    }


	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}

	public function add_user()
	{

		$data['title']='Add User';

        
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address','required');
		

 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-user',$data);
		$this->load->view('admin/inc/footer');

		}

		else {

	      
			$idata['Name']=$this->input->post('name');
			$idata['Email']=$this->input->post('email');
			$idata['Password']=$this->input->post('password');
			$idata['Address']=$this->input->post('address');
		 
			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_user()
	{

		$data['title']='View user';

	
		
		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
	public function edit_user($id)
	{

		$data['title']='Edit User';


		
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address','required');
		
		
	

		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-user',$data);
			$this->load->view('admin/inc/footer');


		} else {

            
			$idata['Name']=$this->input->post('name');
			$idata['Email']=$this->input->post('email');
			$idata['Password']=$this->input->post('password');
			$idata['Address']=$this->input->post('address');
			


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

	public function add_place()
	{

		$data['title']='Add place';


		$this->form_validation->set_rules('Place_name', 'Place Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-place',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['Place_name']=$this->input->post('Place_name');
			
		

			$this->db->insert('tbl_place',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_place()
	{

		$data['title']='View place';

	
		
		$data['Place']=$this->db->get('tbl_place')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-Place',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_place($id)
	{

		$data['title']='Edit place';


		
		$this->form_validation->set_rules('Place_name', ' Place Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['Place']=$this->db->where('p_id',$id)->get('tbl_place')->result_array();


			$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-Place',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['Place_name']=$this->input->post('Place_name');
			

			



			$this->db->where('p_id',$id)->update('tbl_place',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_place($id)
	{


			  
		$this->db->where('p_id',$id)->delete('tbl_place');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}




    
      public function add_famous_things()
	
	{

		$data['title']='Add Famous Things';


		$this->form_validation->set_rules('Famous_things_name', 'Famous_things_name', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('Place_id', 'Place_id', 'required');
		
 
      if ($this->form_validation->run() == FALSE) {


      	$data['places']=$this->db->get('tbl_place')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add_famous_things',$data);
		$this->load->view('admin/inc/footer');

		}

		else {
			
			if(!empty($_FILES) && ($_FILES['Picture']['name'])){


					$config['upload_path'] = 'image/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('Picture')) {
						$this->session->set_flashdata('message', $this->upload->display_errors());

						redirect('admin/add_famous_things');
					} 
					else {
						$avatar = $this->upload->data();
						$Picture = $avatar['file_name'];

						$idata['Picture']=$Picture;
					}
				
				

				}else{
			
					$message='<div class="alert alert-danger">Please Add Image first</div>';

					$this->session->set_flashdata('message',$message);

					redirect('admin/add_famous_things');

				}

			
			
			
			
			
			
			$idata['Famous_things_name']=$this->input->post('Famous_things_name');
			$idata['Description']=$this->input->post('Description');
			$idata['Place_id']=$this->input->post('Place_id');
			


			
			
		

			$this->db->insert('tbl_famous_things',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_famous_things()
	{


        $data['title']='View Famous Things';

		
			
	
		
		$data['view_famous_things']=$this->db->select('*')->from('tbl_famous_things,tbl_place')->where('tbl_famous_things.Place_id=tbl_place.p_id')->get()->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view_famous_things',$data);
		$this->load->view('admin/inc/footer');

	}

	
	public function edit_famous_things($id)
	{

		$data['title']='Edit Famous Things';


		
		$this->form_validation->set_rules('Famous_things_name', 'Famous_things_name', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('Place_id', 'Place_id', 'required');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['tbl_famous_things']=$this->db->where('F_id',$id)->get('tbl_famous_things')->result_array();

			$data['places']=$this->db->get('tbl_place')->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit_famous_things',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['Famous_things_name']=$this->input->post('Famous_things_name');
			$idata['Description']=$this->input->post('Description');
			$idata['Place_id']=$this->input->post('Place_id');
			

			if(!empty($_FILES) && ($_FILES['Picture']['name'])){


					$config['upload_path'] = 'image/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('Picture')) {
						$this->session->set_flashdata('message', $this->upload->display_errors());

						redirect('admin/edit_famous_things/'.$id);
					} 
					else {
						$avatar = $this->upload->data();
						$Picture = $avatar['file_name'];

						$idata['Picture']=$Picture;
					}
				
				

				} 



			$this->db->where('F_id',$id)->update('tbl_famous_things',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	
	
	public function delete_famous_things($id)
	{


			  
		$this->db->where('F_id',$id)->delete('tbl_famous_things');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}









    public function add_famous_spots()
	{

		$data['title']='Add Famous Spots';


		$this->form_validation->set_rules('Spots_name', 'Spots_name', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('Place_id', 'Place_id', 'required');
		
 
 
      if ($this->form_validation->run() == FALSE) {


      	$data['places']=$this->db->get('tbl_place')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add_famous_spots',$data);
		$this->load->view('admin/inc/footer');

		}

		else

		{
			
		if(!empty($_FILES) && ($_FILES['Picture']['name'])){

		$config['upload_path'] = 'image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('Picture')) {
		 $this->session->set_flashdata('message', $this->upload->display_errors());

		redirect('admin/add_famous_spots');
		} else {
		$avatar = $this->upload->data();
		$Picture = $avatar['file_name'];

		$idata['Picture']=$Picture;
		}

		}else{

		$message='<div class="alert alert-danger">Please Add Image first</div>';

		$this->session->set_flashdata('message',$message);

		redirect('admin/add_famous_spots');

		}

		
			
			$idata['Spots_name ']=$this->input->post('Spots_name');
			$idata['Description ']=$this->input->post('Description');
			$idata['Place_id']=$this->input->post('Place_id');


			
			
		

			$this->db->insert('tbl_famous_spots',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	
	}

	public function view_famous_spots()
	
	{
	
	  $data['title']='View Famous Spots';
	

		
		
		$data['view_famous_spots']=$this->db->select('*')->from('tbl_famous_spots,tbl_place')->where('tbl_famous_spots.Place_id=tbl_place.p_id')->get()->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view_famous_spots',$data);
		$this->load->view('admin/inc/footer');

	}

	
	public function edit_famous_spots($id)
	{

		$data['title']='Edit Famous Spots';


		
		$this->form_validation->set_rules('Spots_name', 'Spots_name', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		$this->form_validation->set_rules('Place_id', 'Place_id', 'required');
		
		
	

 if ($this->form_validation->run() == FALSE) {
			
			
			$data['tbl_famous_spots']=$this->db->where('s_id',$id)->get('tbl_famous_spots')->result_array();

		$data['places']=$this->db->get('tbl_place')->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit_famous_spots',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['Spots_name']=$this->input->post('Spots_name');
			$idata['Description']=$this->input->post('Description');
			$idata['Place_id']=$this->input->post('Place_id');
			

			if(!empty($_FILES) && ($_FILES['Picture']['name'])){


					$config['upload_path'] = 'image/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('Picture')) {
						$this->session->set_flashdata('message', $this->upload->display_errors());

						redirect('admin/edit_famous_spots/'.$id);
					} 
					else {
						$avatar = $this->upload->data();
						$Picture = $avatar['file_name'];

						$idata['Picture']=$Picture;
					}
				
				

				} 


			



			$this->db->where('s_id',$id)->update('tbl_famous_spots',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	
	public function delete_famous_spots($id)
	{


			  
		$this->db->where('s_id',$id)->delete('tbl_famous_spots');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}






    public function add_famous_person()
	
	 {

		$data['title']='Add Famous Persons';


		$this->form_validation->set_rules('Famous_person_name', 'Famous_person_name', 'required');
		
		$this->form_validation->set_rules('Place_id', 'Place_id', 'required');
		
 
      if ($this->form_validation->run() == FALSE) {


      	$data['places']=$this->db->get('tbl_place')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add_famous_person',$data);
		$this->load->view('admin/inc/footer');

		}
		else

		{
			
			
		if(!empty($_FILES) && ($_FILES['Picture']['name'])){

		$config['upload_path'] = 'image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('Picture')) {
		 $this->session->set_flashdata('message', $this->upload->display_errors());

		redirect('admin/add_famous_person');
		} else {
		$avatar = $this->upload->data();
		$Picture = $avatar['file_name'];

		$idata['Picture']=$Picture;
		}

		}else{

		$message='<div class="alert alert-danger">Please Add Image first</div>';

		$this->session->set_flashdata('message',$message);

		redirect('admin/add_famous_person');

		}

		
			
			$idata['Famous_person_name ']=$this->input->post('Famous_person_name');

			$idata['Place_id']=$this->input->post('Place_id');


			
			
		

			$this->db->insert('tbl_famous_person',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	 }
	
		


	 
		 
	
	
	

	public function view_famous_person()
	
	{
		 $data['title']='View Famous Person';
		 
		$data['view_famous_person']=$this->db->select('*')->from('tbl_famous_person,tbl_place')->where('tbl_famous_person.Place_id=tbl_place.p_id')->get()->result_array();
		

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view_famous_person',$data);
		$this->load->view('admin/inc/footer');

	}
		
	public function edit_famous_person($id)
	{

		$data['title']='Edit Famous Person';


		
		$this->form_validation->set_rules('Famous_person_name', 'Famous_person_name', 'required');
		$this->form_validation->set_rules('Place_id', 'Place_id', 'required|regex_match[/^[0-9 ]*$/]');
		
		
	


		if ($this->form_validation->run() == FALSE) {
			
			
			$data['tbl_famous_person']=$this->db->where('F_id',$id)->get('tbl_famous_person')->result_array();

		$data['places']=$this->db->get('tbl_place')->result_array();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit_famous_person',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['Famous_person_name']=$this->input->post('Famous_person_name');
			$idata['Place_id']=$this->input->post('Place_id');
			

			if(!empty($_FILES) && ($_FILES['Picture']['name'])){


					$config['upload_path'] = 'image/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('Picture')) {
						$this->session->set_flashdata('message', $this->upload->display_errors());

						redirect('admin/edit_famous_person/'.$id);
					} 
					else {
						$avatar = $this->upload->data();
						$Picture = $avatar['file_name'];

						$idata['Picture']=$Picture;
					}
				
				

				} 



			$this->db->where('F_id',$id)->update('tbl_famous_person',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	

	

	
	
	public function delete_famous_person($id)
	{


			  
		$this->db->where('F_id',$id)->delete('tbl_famous_person');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}




}