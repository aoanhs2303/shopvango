<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require('mail/PHPMailerAutoload.php');
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		// $this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/home_view.php', null);
		// $this->load->view('home/include/footer.php', null, FALSE);
	}

	public function congthuc()
	{
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/list_danhmuc_view.php', null);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function baiviet()
	{
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/chitiet_view.php', null);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function danhmuc()
	{
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/danhmuc_view.php', null);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function add()
	{
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/submit_baiviet_view.php', null);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function quanly()
	{
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/danhsach_view.php', null);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
