<?php
class nguoi_dung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nguoi_dung/m_nguoi_dung_table');
    }

    public function danh_sach()
    {
        $dsnd = $this->m_nguoi_dung_table->ds_nguoi_dung();
        $data['dsnd'] = $dsnd;
        $data['path'] = array('nguoi_dung/v_doc_dsnd');
        $this->load->view('nguoi_dung/v_doc_dsnd');
    }
}
?>