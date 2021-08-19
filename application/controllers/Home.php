<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','model');
	}
	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/index');
		$this->load->view('home/footer');
	}
	public function biography()
	{
		$this->load->view('home/header');
		$this->load->view('home/biography');
		$this->load->view('home/footer');
	}
	public function contact()
	{
		$this->load->view('home/header');
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function speeches()
	{
		$this->load->view('home/header');
		$this->load->view('home/speeches');
		$this->load->view('home/footer');
	}
	public function media_coverage()
	{
		$this->load->view('home/header');
		$this->load->view('home/media_coverage');
		$this->load->view('home/footer');
	}
	public function videos()
	{
		$this->load->view('home/header');
		$this->load->view('home/videos');
		$this->load->view('home/footer');
	}
	public function photos()
	{
		$this->load->view('home/header');
		$this->load->view('home/photos');
		$this->load->view('home/footer');
	}
	public function getEnquiry()
	{
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$name=$fname.' '.$lname; 
		$email=$this->input->post('email');
		$mobno=$this->input->post('mobno');
		$subject=$this->input->post('subject');
		$message=$this->input->post('message');
		$data=array(
			'name'=>$name,
			'email'=>$email,
			'mobno'=>$mobno,
			'subject'=>$subject,
			'message'=>$message
		);
		if($this->model->getEnquiry($data)):
  	 	$this->session->set_flashdata('msg', "Thank for enquiry with us. We will contact you soon.");
		return redirect(base_url().'home/contact');
		else:
		$this->session->set_flashdata('msg', "Something went wrong. Try again");
			return redirect(base_url().'home/contact');
  		endif;
	}
}
