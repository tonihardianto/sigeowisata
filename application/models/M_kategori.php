<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

    function getKat(){
        $res = $this->db->get('tb_kat_wisata');
        return $res;
    }

    function addKat($kat,$marker){
        $res = $this->db->query("INSERT INTO tb_kat_wisata (kategori_nama,kategori_marker) values('$kat','$marker')");
        return $res;
    }
    function delKat($id){
        $res = $this->db->query("DELETE FROM tb_kat_wisata WHERE kategori_id='$id'");
        return $res;
    }
    function getData(){
        $res = $this->db->query("Select * from tb_kat_wisata");
        return $res;
    }
    function updKat($kat, $fileuser, $id){
        $res = $this->db->query("Update tb_kat_wisata set kategori_nama='$kat', kategori_marker='$fileuser' where kategori_id='$id' ");
        return $res;
    }

}

/* End of file M_kategori.php */


?>