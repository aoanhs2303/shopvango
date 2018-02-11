<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{

		$data_main = array(

		);

		$category_van  = $this->Admin_model->getCategory_Van('van');
		$category_lot  = $this->Admin_model->getCategory_Van('lot');
		$category_khac = $this->Admin_model->getCategory_Van('khac');
		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);

		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/cart_view',$data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */