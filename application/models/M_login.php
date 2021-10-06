<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function get_akses($user,$pass){
        $res = $this->db->query("SELECT * FROM tb_admin WHERE user_username='$user' AND user_password='$pass' LIMIT 1");
        return $res;
    }
    function get_auth($email, $pass)
    {
        $res = $this->db->query("SELECT * FROM tb_member WHERE member_email='$email' AND member_password='$pass' LIMIT 1");
        return $res;
    }
    

}

/* End of file M_login.php */

?>