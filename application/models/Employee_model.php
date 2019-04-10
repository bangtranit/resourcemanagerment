<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	public function add($avatar, $name, $old, $phone, $number_of_order, $link_fb)
	{
		$data = array(  'avatar_image' => $avatar,
						'name' => $name,
						'old'  => $old,
						'phone'=> $phone,
						'number_of_order' => $number_of_order,
						'fb_url' => $link_fb);
		$this->db->insert('employees', $data);
		return $this->db->insert_id();
	}
}

/* End of file Employee_model.php */
/* Location: ./application/models/Employee_model.php */