<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function getCategoryVan()
    {
        $this->db->select('*');
        $this->db->where('main', '1');
        $data = $this->db->get('danhmuc');
        $data = $data->result_array();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function getCategoryTamLot()
    {
        $this->db->select('*');
        $this->db->where('main', '2');
        $data = $this->db->get('danhmuc');
        $data = $data->result_array();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
