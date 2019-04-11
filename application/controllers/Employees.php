<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once(APPPATH . 'services' . DIRECTORY_SEPARATOR . 'Upload_services.php');


class Employees extends CI_Controller {
	// protected $upload_services;

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Employee_model');
		$data = array('employees' => $this->Employee_model->getall());
		$this->load->view('employee_list', $data);
	}

	public function add()
	{
		$name = $this->input->post('name');
		$old = $this->input->post('old');
		$phone = $this->input->post('phone');
		$number_of_order = $this->input->post('number_of_order');
		$fb_link = $this->input->post('fb_link');
		$avatar = $this->upload_file('avatar');

		$this->load->model('Employee_model');
		if ($this->Employee_model->add($avatar, $name, $old, $phone, $number_of_order, $fb_link)) {
			$this->load->view("employee_insert_success");
		}else{
			echo "insert failed";
		}
	}

	public function addByAjax()
	{
		$name = $this->input->post('name');
		$old = $this->input->post('old');
		$phone = $this->input->post('phone');
		$number_of_order = $this->input->post('number_of_order');
		$fb_link = $this->input->post('fb_link');
		$avatar = "https://ae01.alicdn.com/kf/HTB1AbOAOXXXXXcfXFXXq6xXFXXXr/hot-girl-tutu-Rose-Leopard-Dot-Women-Bustier-Crop-Top-Sexy-Clubwear-Spaghetti-Strap-Camouflage-Bustiers.jpg_640x640.jpg";

		$this->load->model('Employee_model');
		if ($this->Employee_model->add($avatar, $name, $old, $phone, $number_of_order, $fb_link)) {
			$this->load->view("employee_insert_success");
		}else{
			echo "insert failed";
		}
	}

	public function detail($id)
	{
		$this->load->model('Employee_model');
		$data = array('data' => $this->Employee_model->getdetail($id));
		$this->load->view('employee_detail', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$old = $this->input->post('old');
		$phone = $this->input->post('phone');
		$number_of_order = $this->input->post('number_of_order');
		$fb_link = $this->input->post('fb_link');
		$avatar = $this->upload_file('avatar');
		if (!$avatar) {
			$avatar = $this->input->post('avatar_2');
		}
		$this->load->model('Employee_model');
		if ($this->Employee_model->update($id, $avatar, $name, $old, $phone, $number_of_order, $fb_link)) {
			echo "ok";
		}else{
			echo "failed";
		}
	}

	public function delete($id)
	{
		echo $id;
		$this->load->model('Employee_model');
		if ($this->Employee_model->delete($id)) {
			echo "delete ok";
		}else{
			echo "error roi";
		}
	}

	public function upload_file($key)
	{
		$target_dir = "file_upload/";
		$target_file = $target_dir . basename($_FILES[$key]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES[$key]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		// Check file size
		if ($_FILES[$key]["size"] > 500000) {
		    // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		if (basename($_FILES[$key]["name"])) {
			return base_url().'file_upload/'.basename($_FILES[$key]["name"]);
		}else{
			return "";
		}
	}
}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */