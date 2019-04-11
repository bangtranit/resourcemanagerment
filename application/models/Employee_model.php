<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getall()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('employees');
		$data = $data->result_array();
		return $data;
	}

	public function add($avatar, $name, $old, $phone, $number_of_order, $link_fb)
	{
		$data = array(  'avatar_image' => $avatar,
						'name' => $name,
						'old'  => $old,
						'phone'=> $phone,
						'number_of_order' => $number_of_order,
						'fb_link' => $link_fb);
		$this->db->insert('employees', $data);
		return $this->db->insert_id();
	}

	public function getdetail($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('employees');
		$data = $data->result_array();
		return $data;
	}

	public function update($id, $avatar, $name, $old, $phone, $number_of_order, $link_fb)
	{
		$this->db->where('id', $id);
		$detail = $this->db->get('employees');
		$detail = $detail->result_array();
		$data = array( 'avatar_image' => $avatar,
			'name' => $name,
			'old'  => $old,
			'phone'=> $phone,
			'number_of_order' => $number_of_order,
			'fb_link' => $link_fb);
		$this->db->where('id', $id);
		return $this->db->update('employees', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('employees');
	}
}

/* End of file Employee_model.php */
/* Location: ./application/models/Employee_model.php */