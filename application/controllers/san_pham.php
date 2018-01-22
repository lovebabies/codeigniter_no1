<?php
class San_pham extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "day la chuong trinh index";
    }

    public function danhsach()
    {
        $this->load->model('san_pham/m_san_pham_table');
        $danhsach=$this->m_san_pham_table->getSanPham();
        echo $danhsach;
    }

    public function them()
    {
        echo "day la phuong thuc them";
    }

    public function capnhat($id)
    {
        echo "cap nhat san pham".$id;
    }

    public function xoa()
    {
        echo "day la phuong thuc xoa";
    }
}
?>