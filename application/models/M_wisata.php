<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisata extends CI_Model {

    function getWisata(){
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id");
        return $res;
    }

    function getWisataById($id){
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id where tb_wisata.wisata_id='$id'");
        return $res;
    }

    function addWisata($nama,$katid,$tiket, $lat, $long, $alamat, $desc,$aid){
        $res  = $this->db->query("INSERT INTO tb_wisata (wisata_nama,wisata_kategori_id,wisata_tiket, wisata_latitude,wisata_longitude,wisata_alamat,wisata_desc,wisata_u_id)
         Values ('$nama','$katid','$tiket','$lat','$long','$alamat','$desc','$aid')");
        return $res;
    }

    function addByMember($nama, $katid, $m_id){
        $res  = $this->db->query("INSERT INTO tb_wisata (wisata_nama,wisata_kategori_id,wisata_m_id) Values ('$nama','$katid','$m_id')");
        return $res;
    }

    function edWisata($nama, $katid,$tiket, $lat, $long, $alamat, $desc, $id){
        $res  = $this->db->query("update tb_wisata SET wisata_nama='$nama', wisata_kategori_id='$katid', wisata_tiket='$tiket', wisata_latitude='$lat',
        wisata_longitude='$long', wisata_alamat='$alamat', wisata_desc='$desc' where wisata_id='$id' ");
        return $res;
    }
    function detWisata($tiket, $lat, $long, $alamat, $desc){
        $res = $this->db->query("INSERT INTO tb_detail_wisata(det_wisata_tiket,det_wisata_latitude,det_wisata_longitude,
        det_wisata_alamat,det_wisata_desc) VALUES ('$tiket','$lat','$long','$alamat','$desc')");
        return $res;
    }

    function detByMember($tiket, $lat, $long, $alamat, $desc){
        $res = $this->db->query("INSERT INTO tb_detail_wisata(det_wisata_tiket,det_wisata_latitude,det_wisata_longitude,
        det_wisata_alamat,det_wisata_desc) VALUES ('$tiket','$lat','$long','$alamat','$desc')");
        return $res;
    }

    function eDetWisata($tiket, $lat, $long, $alamat, $desc, $id1){
        $res = $this->db->query("UPDATE tb_detail_wisata SET det_wisata_tiket='$tiket', det_wisata_latitude='$lat', det_wisata_longitude='$long',
        det_wisata_alamat='$alamat', det_wisata_desc='$desc' where det_wisata_id='$id1' ");
        return $res;
    }
    function delWisata($id){
        $res = $this->db->query("delete from tb_wisata where wisata_id='$id'");
        return $res;
    }
    function delDetWisata($id1){
        $res = $this->db->query("delete from tb_detail_wisata where det_wisata_id='$id1'");
        return $res;
    }


    function kota(){
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_detail_wisata ON tb_wisata.wisata_id=tb_detail_wisata.det_wisata_id
        INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id WHERE kategori_id='4'");
        return $res;
    }
    function alam(){
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_detail_wisata ON tb_wisata.wisata_id=tb_detail_wisata.det_wisata_id
        INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id WHERE kategori_id='1'");
        return $res;
    }
    function kuliner()
    {
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_detail_wisata ON tb_wisata.wisata_id=tb_detail_wisata.det_wisata_id
        INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id WHERE kategori_id='3'");
        return $res;
    }
    function budaya()
    {
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_detail_wisata ON tb_wisata.wisata_id=tb_detail_wisata.det_wisata_id
        INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id WHERE kategori_id='2'");
        return $res;
    }
    function getEdit($id){
        $res = $this->db->query("SELECT * FROM tb_wisata INNER JOIN tb_detail_wisata ON tb_wisata.wisata_id=tb_detail_wisata.det_wisata_id
        INNER JOIN tb_kat_wisata ON tb_wisata.wisata_kategori_id=tb_kat_wisata.kategori_id where wisata_id='$id'");
        return $res;

    }


}

/* End of file M_wisata.php */


?>