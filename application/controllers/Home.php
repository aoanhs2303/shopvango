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
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar         = $this->load->view('home/include/sidebar', $data_side, TRUE);
		$category_van    = $this->Admin_model->getCategory_Van('van');
		$category_lot    = $this->Admin_model->getCategory_Van('lot');
		$category_khac   = $this->Admin_model->getCategory_Van('khac');
		$vanep_all       = $this->Admin_model->getProductCate_Van();
		$tamlot_all      = $this->Admin_model->getProductCate_Lot();
		$hot_product     = $this->Admin_model->getHotProduct();
		$hot_product     = array_chunk($hot_product, 2);
		$dichvu          = $this->Admin_model->getService();
		$slideanh        = $this->Admin_model->getSlideAnh();
		$banner          = $this->Admin_model->getBanner();
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');


		$data_main = array(
			'sidebar'      => $sidebar,
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'vanep'        => $vanep_all,
			'tamlot'       => $tamlot_all,
			'hot'          => $hot_product,
			'dichvu'       => $dichvu,
			'slideanh'     => $slideanh,
			'banner'       => $banner,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
		);

		$data_menu = array(
			'category_van'  => $category_van,
			'category_lot'  => $category_lot,
			'category_khac' => $category_khac
		);
		

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/home_view',$data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
	}

	public function product()
	{
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar         = $this->load->view('home/include/sidebar', $data_side, TRUE);
		$category_van    = $this->Admin_model->getCategory_Van('van');
		$category_lot    = $this->Admin_model->getCategory_Van('lot');
		$category_khac   = $this->Admin_model->getCategory_Van('khac');
		$vanep_all       = $this->Admin_model->getProductCate_Van();
		$tamlot_all      = $this->Admin_model->getProductCate_Lot();
		$hot_product     = $this->Admin_model->getHotProduct();
		$hot_product     = array_chunk($hot_product, 2);
		$dichvu          = $this->Admin_model->getService();
		$slideanh        = $this->Admin_model->getSlideAnh();
		$banner          = $this->Admin_model->getBanner();
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');


		$data_main = array(
			'sidebar'      => $sidebar,
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'vanep'        => $vanep_all,
			'tamlot'       => $tamlot_all,
			'hot'          => $hot_product,
			'dichvu'       => $dichvu,
			'slideanh'     => $slideanh,
			'banner'       => $banner,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
		);

		$data_menu = array(
			'category_van'  => $category_van,
			'category_lot'  => $category_lot,
			'category_khac' => $category_khac
		);
		

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/product_view',$data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
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
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array(
			'sidebar'  => $sidebar,
			'sanpham'  => $product,
			'lienquan' => $relate_product,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
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
		$slideanh    = $this->Admin_model->getSlideAnh();
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array(
			'sidebar'  => $sidebar,
			'products' => $all_product,
			'slideanh' => $slideanh,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
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
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array(
			'sidebar'   => $sidebar,
			'gioithieu' => $gioithieu,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
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
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
			
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
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
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
        $contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array( 
		    'sidebar' => $sidebar,
		    'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address    
		);

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

	public function catalogue()
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

		$data_main = array('sidebar' => $sidebar);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);

		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/catalogue_view', $data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
	}

	public function thuvien3d()
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

		$data_main = array('sidebar' => $sidebar);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);

		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/thuvien3d_view', $data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
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

		$huongdan 		 = $this->Admin_model->getHuongDanMuaHang();
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array( 
			'sidebar'  => $sidebar,
			'huongdan' => $huongdan,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
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
		Người đặt: '.$name.' .<br>
		Sđt: '.$sdt.' .<br>
		Email: '.$email.' .<br>
		Địa chỉ giao hàng: '.$diachi.' .<br>
		Sản phẩm: '.$sanpham.' .<br>
		';
        $mail = new PHPMailer;
        
        $mail->isSMTP(); // Mở cái này lên là lỗi nữa  

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
        	$this->dathangthanhcong();
        }		

	}

	public function search()
	{
		$tukhoa = $this->input->get('search_fill');
		$search_res = $this->Admin_model->SearchHome($tukhoa);
		$res_empty = "";
		if(empty($search_res)) {
			$res_empty = "Không tìm thấy sản phẩm cho \"$tukhoa\"";
		}

		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar     = $this->load->view('home/include/sidebar', $data_side, TRUE);
        $contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');
		$data_main = array(
			'sidebar'  => $sidebar,
			'products' => $search_res,
			'tukhoa'   => $tukhoa,
			'koketqua' => $res_empty,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
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
		$this->load->view('home/timkiem_view',$data_main);
		$this->load->view('home/include/footer.php', null, FALSE);

	}
	
	public function dathangthanhcong()
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
		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');

		$data_main = array( 
			'sidebar' => $sidebar,
			'sdt'          => $contact_sdt,
			'email'        => $contact_email,
			'address'      => $contact_address
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/thanhcong_view', $data_main);
		$this->load->view('home/include/footer.php', null, FALSE);
	}

	public function tintuc($page = 1)
	{
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar       = $this->load->view('home/include/sidebar_right', $data_side, TRUE);

		$category_van  = $this->Admin_model->getCategory_Van('van');
		$category_lot  = $this->Admin_model->getCategory_Van('lot');
		$category_khac = $this->Admin_model->getCategory_Van('khac');
		$total = $this->Admin_model->getTotalNews();
		$totalPage = ceil($total / 3);
		$offset = ($page - 1) * 3;
		$dichvu = $this->Admin_model->getSliceNews($offset, 3);
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu,
			'totalPage' => $totalPage,
			'curPage' => $page
		);
		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);

		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/tintuc_view', $data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
	}

	public function searchtintuc()
	{
		$category     = $this->Admin_model->getCategory();
		$product_side = $this->Admin_model->getHotProductSide();
		$data_side    = array(
			'danhmuc'  => $category,
			'side_hot' => $product_side
		);
		$sidebar       = $this->load->view('home/include/sidebar_right', $data_side, TRUE);

		$category_van  = $this->Admin_model->getCategory_Van('van');
		$category_lot  = $this->Admin_model->getCategory_Van('lot');
		$category_khac = $this->Admin_model->getCategory_Van('khac');

		$tukhoa = $this->input->get('title');
		$dichvu = $this->Admin_model->searchNews($tukhoa);
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu,
			'totalPage' => 1,
			'curPage' => 1,
			'tukhoa' => $tukhoa
		);

		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/tintuc_view', $data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
	}

	public function tintuc_chitiet($id)
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

		$dichvu = $this->Admin_model->getNewsById($id);
		$data_main = array(
			'sidebar'   => $sidebar,
			'dichvu' => $dichvu
		);

		$contact_sdt     = $this->Admin_model->getContact('sdt');
		$contact_email   = $this->Admin_model->getContact('email');
		$contact_address = $this->Admin_model->getContact('address');

		$data_footer = array(
			'sdt'     => $contact_sdt,
			'email'   => $contact_email,
			'address' => $contact_address
		);

		$data_menu = array(
			'category_van' => $category_van,
			'category_lot' => $category_lot,
			'category_khac' => $category_khac
		);
		$this->load->view('home/include/header.php', null, FALSE);
		$this->load->view('home/include/menutop.php', $data_menu, FALSE);
		$this->load->view('home/tintuc_chitiet_view.php', $data_main);
		$this->load->view('home/include/footer.php', $data_footer, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
