<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar       = $this->load->view('home/include/sidebar', $data_side, TRUE);
		$category_van  = $this->Admin_model->getCategory_Van('van');
		$category_lot  = $this->Admin_model->getCategory_Van('lot');
		$category_khac = $this->Admin_model->getCategory_Van('khac');
		$vanep_all     = $this->Admin_model->getProductCate_Van();
		$tamlot_all    = $this->Admin_model->getProductCate_Lot();
		$hot_product   = $this->Admin_model->getHotProduct();
		$hot_product   = array_chunk($hot_product, 2);
		$data_main = array(
			'sidebar'      => $sidebar,
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'vanep'        => $vanep_all,
			'tamlot'	   => $tamlot_all,
			'hot'		   => $hot_product
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/home_view',$data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function sanpham($idsp)
	{
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar        = $this->load->view('home/include/sidebar', $data_side, TRUE);
		$product        = $this->Admin_model->getProductById($idsp);
		$relate_product = $this->Admin_model->getRelatedProduct($idsp);
		$data_main = array(
			'sidebar'  => $sidebar,
			'sanpham'  => $product,
			'lienquan' => $relate_product
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
		$this->load->view('home/sanpham_view',$data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function danhmuc($id)
	{
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar     = $this->load->view('home/include/sidebar', $data_side, TRUE);
		$all_product = $this->Admin_model->getProductByCateId($id);
		$data_main = array(
			'sidebar'  => $sidebar,
			'products' => $all_product
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
		$this->load->view('home/danhmuc_view',$data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */