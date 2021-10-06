<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {

    function getMember(){
        $res = $this->db->query("Select * from tb_member");
        return $res;
    }

    function delMember($id){
        $res = $this->db->query("delete from tb_member where member_id='$id'");
        return $res;
    }

    function getWisata(){
        $res = $this->db->query("Select * from tb_mwisata");
        return $res;
    }

    function addMember($email,$password, $username, $fullname, $telepon, $gender){
        $res=$this->db->query("INSERT INTO tb_member (member_email,member_password,member_username,member_fullname,member_phone,member_gender) 
        VALUES('$email','$password','$username','$fullname','$telepon','$gender')");
        return $res;
    }

    function getByMember($id){
        $res = $this->db->query("Select * from tb_mwisata where w_member_id='$id' ");
        return $res;
    }

    function addWisata($nama, $katid, $tiket, $long, $lat, $alamat, $desc,$id){
        $res = $this->db->query("insert into tb_mwisata (w_nama,w_kategori,w_tiket,w_long,w_lat,w_alamat,w_desc,w_member_id)
        values('$nama','$katid','$tiket','$lat','$long','$alamat','$desc','$id') ");
        return $res;
    }

    function editWisata($nama, $katid, $tiket,$long, $lat, $alamat, $desc, $id){
        $res = $this->db->query(" update tb_mwisata set w_nama='$nama',w_kategori='$katid',w_tiket='$tiket',w_long='$long',w_lat='$lat',
        w_alamat='$alamat',w_desc='$desc' where w_id='$id' ");
        return $res;
    }

    function delWisata($id)
    {
        $res = $this->db->query("DELETE FROM tb_mwisata  where w_id='$id'");
        return $res;
    }

    function getEdit($id)
    {
        $res = $this->db->query("SELECT * FROM tb_mwisata  where w_id='$id'");
        return $res;
    }

    function approve($id, $status){
        $res = $this->db->query("UPDATE tb_mwisata set w_status='$status'  where w_id='$id'");
        return $res;
    }

    function reject($id,$status){
        $res = $this->db->query("UPDATE tb_mwisata set w_status='$status'  where w_id='$id'");
        return $res;
    }

    function approveInap($id,$status){
        $res = $this->db->query("UPDATE tb_mpenginapan set inap_status='$status'  where inap_id='$id'");
        return $res;
    }
    
    function rejectInap($id,$status){
        $res = $this->db->query("UPDATE tb_mpenginapan set inap_status='$status'  where inap_id='$id'");
        return $res;
    }

    function wisataByMember($id){
        $res = $this->db->query(" SELECT * from tb_mwisata INNER JOIN tb_kat_wisata ON tb_mwisata.w_kategori=tb_kat_wisata.kategori_id
         where tb_mwisata.w_member_id='$id' AND tb_mwisata.w_status='Waiting'");
        return $res;
    }

    function inapByMember($id){
        $res = $this->db->query(" SELECT * from tb_mpenginapan where inap_status='Pending' and member_id='$id'");
        return $res;
    }

}

/* End of file M_member.php */


?>