<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
		$this->load->view('header');
	}
	public function about()
	{
		$this->load->view('header2');
		$this->load->view('about');
		
		
	}
	
	public function tour()
	{
		$this->load->view('header2');
		$this->load->view('tour');
		
		
	}
	
	public function offer()
	{
		$this->load->view('header2');
		$this->load->view('offer');
		
	}
	
	public function blog()
	{
		$this->load->view('header2');
		$this->load->view('blog');
		
		
	}
	public function header()
	{
		$this->load->view('header2');
		
	}
	public function header2()
	{
		$this->load->view('header2');
		
	}
	public function header3()
	{
		$this->load->view('header3');
		
	}
	
	public function sp()
	{
		$this->load->view('header3');
		$this->load->view('sp');
		$this->load->view('footer');
		
	}
	
	public function ss()
	{
		$this->load->view('header3');
		$this->load->view('ss');
		$this->load->view('footer');
		
	}
	
	public function sa()
	{
		$this->load->view('header3');
		$this->load->view('sa');
		$this->load->view('footer');
		
	}
	public function dhaka()
	{
		$this->load->view('header');
		$this->load->view('dhaka');
		
		
	}
	public function chittagong()
	{
		$this->load->view('header');
		$this->load->view('chittagong');
		
		
	}
	public function barisal()
	{
		$this->load->view('header');
		$this->load->view('barisal');
		
		
	}
	public function rajshahi()
	{
		$this->load->view('header');
		$this->load->view('rajshahi');
		
		
	}
	public function rangpur()
	{
		$this->load->view('header');
		$this->load->view('rangpur');
		
		
	}
	public function sylhet()
	{
		$this->load->view('header');
		$this->load->view('sylhet');
		
		
	}
	public function khulna()
	{
		$this->load->view('header');
		$this->load->view('khulna');
		
		
	}public function mymensingh()
	{
		$this->load->view('header');
		$this->load->view('mymensingh');
		
		
	}
	
	public function dhaka1()
	{
		$this->load->view('header2');
		$this->load->view('dhaka1');
		
		
	}
	
	public function chittagong1()
	{
		$this->load->view('header2');
		$this->load->view('chittagong1');
		
		
	}
	
	public function barisal1()
	{
		$this->load->view('header2');
		$this->load->view('barisal1');
		
		
	}
	
	public function rajshahi1()
	{
		$this->load->view('header2');
		$this->load->view('rajshahi1');
		
		
	}
	
	public function rongpur1()
	{
		$this->load->view('header2');
		$this->load->view('rongpur1');
		
		
	}
	
	public function khulna1()
	{
		$this->load->view('header2');
		$this->load->view('khulna1');
		
		
	}
	
	public function sylhet1()
	{
		$this->load->view('header2');
		$this->load->view('sylhet1');
		
		
	}
	public function mymensingh1()
	{
		$this->load->view('header2');
		$this->load->view('mymensingh1');
		
		
	}
	
	
	
	public function famous_person($place_id="")
	{
		
		$data['persons']=$this->db->where('Place_id',$place_id)->get('tbl_famous_person')->result_array();
		
		$this->load->view('header2');
		$this->load->view('famous-person',$data);
		
		
	}
	
	
	public function famous_spots($place_id="")
	{
		
		$data['spots']=$this->db->where('Place_id',$place_id)->get('tbl_famous_spots')->result_array();
		
		$this->load->view('header2');
		$this->load->view('famous-spot',$data);
		
		
	}
	
	
	public function famous_things($place_id="")
	{
		
		$data['things']=$this->db->where('Place_id',$place_id)->get('tbl_famous_things')->result_array();
		
		$this->load->view('header2');
		$this->load->view('famous-thing',$data);
		

	}
	public function sajek()
	{
		$this->load->view('header2');
		$this->load->view('sajek');
		$this->load->view('footer');
		
	}
	public function sntmart()
	{
		$this->load->view('header2');
		$this->load->view('sntmart');
		$this->load->view('footer');
		
	}
	public function sundorbon()
	{
		$this->load->view('header2');
		$this->load->view('sundorbon');
		$this->load->view('footer');
		
	}
	
	
}