<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getEnquiry($data)
	{
		return $this->db->insert('contact',$data);
	}

}