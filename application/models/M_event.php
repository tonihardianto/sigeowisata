<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model {

    function getEvent(){
        $res = $this->db->query("Select * from tb_event");
        return $res;
    }

    function getDataJson(){
        $res = $this->db->query("select * from tb_event");
        return $res;
    }

    function simpan($nama, $tempat, $mulai, $akhir){
        $res = $this->db->query("Insert into tb_event (event_nama,event_alamat,event_start,event_end) VALUES('$nama','$tempat','$mulai','$akhir')");
        return $res;
    }

    function edit($id,$nama, $tempat, $mulai, $akhir){
        $res = $this->db->query("UPDATE tb_event set event_nama='$nama',event_alamat='$tempat',event_start='$mulai',event_end='$akhir'
        where event_id='$id' ");
        return $res;
    }

    function delete($id){
        $res = $this->db->query("delete from tb_event where event_id='$id'");
        return $res;
    }


}

/* End of file M_event.php */


?>