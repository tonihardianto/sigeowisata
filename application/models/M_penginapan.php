<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_penginapan extends CI_Model {

    
    function getData(){
        $res = $this->db->get('tb_penginapan');
        return $res;
    }

    function getDataId($id){
        $res = $this->db->query("select * from tb_penginapan where inap_id='$id'");
        return $res;
    }

    function getEdit($id){
        $res = $this->db->query(" select * from tb_penginapan where inap_id='$id'");
        return $res;
    }

    function delData($id) {
        $res = $this->db->query("delete from tb_penginapan where inap_id='$id'");
        return $res;
    }

    function getDataById($id)
    {
        $res = $this->db->query(" select * from tb_mpenginapan where member_id='$id'");
        return $res;
    }

    function getEditById($id)
    {
        $res = $this->db->query(" select * from tb_mpenginapan where inap_id='$id'");
        return $res;
    }

    function delInap($id){
        $res = $this->db->query("delete from tb_mpenginapan where inap_id='$id'");
        return $res;
    }

    function saveInap($nama, $kat, $fas, $long, $lat, $alamat, $desc,$uid){
        $res = $this->db->query("INSERT INTO tb_penginapan(inap_nama,inap_kategori,inap_fasilitas,inap_latitude,inap_longitude,
        inap_alamat,inap_desc,inap_user_id) VALUES('$nama','$kat','$fas','$lat','$long','$alamat','$desc','$uid')");
        return $res;
    }

    function saveByMember($nama, $kat, $fasilitas, $long, $lat, $alamat, $desc,$m_id){
        $res = $this->db->query("INSERT INTO tb_penginapan(inap_nama,inap_kategori,inap_fasilitas,inap_latitude,inap_longitude,
        inap_alamat,inap_desc,member_id) VALUES('$nama','$kat','$fasilitas','$lat','$long','$alamat','$desc','$m_id')");
        return $res;
    }

    function editInap($nama, $kat, $fas, $long, $lat, $alamat, $desc, $id){
        $res = $this->db->query(" update tb_penginapan set inap_nama='$nama', inap_kategori='$kat', inap_fasilitas='$fas', inap_longitude='$long',
        inap_latitude='$lat', inap_alamat='$alamat', inap_desc='$desc' where inap_id='$id' ");
        return $res;
    }

    function saveInapById($nama, $kat, $fas, $long, $lat, $alamat, $desc,$id){
        $res = $this->db->query("INSERT INTO tb_mpenginapan(inap_nama,inap_kategori,inap_fasilitas,inap_latitude,inap_longitude,
        inap_alamat,inap_desc,member_id) VALUES('$nama','$kat','$fas','$lat','$long','$alamat','$desc','$id')");
        return $res;
    }

    function editInapById($nama, $kat, $fas, $long, $lat, $alamat, $desc, $id){
        $res = $this->db->query(" update tb_mpenginapan set inap_nama='$nama', inap_kategori='$kat', inap_fasilitas='$fas', inap_longitude='$long',
        inap_latitude='$lat', inap_alamat='$alamat', inap_desc='$desc' where inap_id='$id' ");
        return $res;
    }



}

/* End of file M_penginapan.php */



?>