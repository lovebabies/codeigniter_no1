<?php
class m_nguoi_dung_table extends CI_Model
{
    public function ds_nguoi_dung()
    {
        $query = $this->db->query('select * from nguoi_dung');
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return false;
    }

    public function nguoi_dung_id($id)
    {
        $query = $this->db->query('select * from nguoi_dung where ma_nguoi_dung = ?',array($id));
        if($query->num_rows() > 0)
        {
            return $query->row_array();
        }
        return false;
    }

    public function them_nguoi_dung($data)
    {
        $chuoiSQL = 'insert into nguoi_dung (ma_nguoi_dung,ten_nguoi_dung,ngay_sinh,dia_chi) values(?,?,?,?)';
        $result = $this->db->query($chuoiSQL,array($data['ma_nguoi_dung'],$data['ten_nguoi_dung'],$data['ngay_sinh'],$data['dia_chi']));
        return $result;
    }
}
?>