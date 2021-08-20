<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getEnquiry($data)
	{
		return $this->db->insert('contact',$data);
	}
	public function getImages()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('images')->result();
	}
	public function getVideos()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('videos')->result();
	}
	public function getSpeeches()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('speeches')->result();
	}
	public function getPersonalInfo($id)
	{
		return $this->db->get_where('personal_info',array('id'=>$id))->result();
	}
	public function getName($id)
	{
		return $this->db->get_where('personal_info',array('id'=>$id))->row()->name;
	}
	public function getAddress($id)
	{
		return $this->db->get_where('personal_info',array('id'=>$id))->row()->address;
	}
	public function getNumber($id)
	{
		return $this->db->get_where('personal_info',array('id'=>$id))->row()->mobno;
	}
	public function getEmail($id)
	{
		return $this->db->get_where('personal_info',array('id'=>$id))->row()->email;
	}

}