<?php
class M_profile extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('wulans');
    }
}
