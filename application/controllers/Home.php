<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('mail/PHPMailerAutoload.php');
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
		$dichvu        = $this->Admin_model->getService();
		$slideanh      = $this->Admin_model->getSlideAnh();
		$data_main = array(
			'sidebar'      => $sidebar,
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'vanep'        => $vanep_all,
			'tamlot'       => $tamlot_all,
			'hot'          => $hot_product,
			'dichvu'       => $dichvu,
			'slideanh'     => $slideanh
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

	public function gioithieu()
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

		$gioithieu = $this->Admin_model->getGioiThieu();
		$data_main = array(
			'sidebar'   => $sidebar,
			'gioithieu' => $gioithieu
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/blog_view', $data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function dichvu()
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

		$dichvu = $this->Admin_model->getService();
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/dichvu_view', $data_main);
		$this->load->view('home/include/footer.php', null, FALSE);		
	}

	public function dichvu_chitiet($id)
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

		$dichvu = $this->Admin_model->getServiceById($id);
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/dichvu_chitiet_view', $data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function bando()
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

		$data_main = array( 'sidebar' => $sidebar);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/bando_view', $data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function huongdanmuahang()
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

		$huongdan = $this->Admin_model->getHuongDanMuaHang();
		$data_main = array( 
			'sidebar'  => $sidebar,
			'huongdan' => $huongdan
		);
		

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/huongdanmuahang_view', $data_main);
		$this->load->view('home/include/footer.php', null, FALSE);		
	}

	public function themdonhang()
	{
		$sanpham = $this->input->post('sanpham_dh');
		$name    = $this->input->post('ten_dh');
		$sdt     = $this->input->post('sdt_dh');
		$email   = $this->input->post('email_dh');
		$diachi  = $this->input->post('diachi_dh');
		$price   = $this->input->post('price_dh');

		if($this->Admin_model->addOrder($sanpham,$name,$sdt,$email,$diachi,$price)) {
			// $link = base_url() . 'cart';
			// redirect($link);
		}
		
		$content = '
		Người đặt: '.$name.'
		Sđt: '.$sdt.'
		Email: '.$email.'
		Địa chỉ giao hàng: '.$diachi.'
		Sản phẩm: '.$sanpham.'
		';
        $mail = new PHPMailer;
        
        //$mail->isSMTP(); // Mở cái này lên là lỗi nữa  

        //Set SMTP host name         
        $mail->CharSet = 'UTF-8';
                            
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;                          
        //Provide username and password     
        $mail->Username = "trannhulucs2303@gmail.com";                 
        $mail->Password = "jwxiksinsogpmzcm";                           
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";                           
        //Set TCP port to connect to 
        $mail->Port = 587;                                   
    
        $mail->From = "trannhulucs2303@gmail.com";
        $mail->FromName = "Đơn đặt hàng từ gothanhcong.com";
    
        $mail->addAddress($email, $name);
        $mail->addAddress("trannhulucs2303@gmail.com", $name);
    
        $mail->isHTML(true);
    
        $mail->Subject = 'Đơn đặt hàng từ gothanhcong.com';
        $mail->Body = $content;
        // $mail->AltBody = "This is the plain text version of the email content";
    
        if(!$mail->send()) {
            $_SESSION["ErrorMessage"] = "Mailer Error: " . $mail->ErrorInfo;
            echo "Thất bại";
            echo "<pre>";
            var_dump($mail->ErrorInfo);
            echo "</pre>";
        } else {
        	echo "<pre>";
        	var_dump($content);
        	echo "</pre>";
        }		

	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */