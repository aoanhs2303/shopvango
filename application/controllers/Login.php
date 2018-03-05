<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		//pass: thanh123cong
		$this->load->view('admin/login_view');		
	}

	public function logout()
	{
		if(isset($_SESSION['Username'])) {
	        session_destroy(); 
	    }
	    redirect(base_url().'login');
	}

	public function xacthucadmin()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$data = $this->Admin_model->authenticationAdmin($user, md5($pass));
		if ($data) {
            $_SESSION["Username"] = $data[0]["username"];
            $this->session->unset_userdata("ErrorMessage");
            redirect(base_url().'admin');
        } else {
        	$_SESSION["ErrorMessage"] = "Incorrect username or password";
        	redirect(base_url().'admin/login');
        }

	}



}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */