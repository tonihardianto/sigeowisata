<?php
class M_user extends CI_Model{
	function get_user(){
		$hsl=$this->db->query("SELECT * FROM tb_admin");
		return $hsl;
	}
  function save_user($username, $password, $fullname, $phone, $email){
    $hsl=$this->db->query("insert into tb_admin(user_username, user_password, user_fullname, user_phone, user_email)
    values ('$username', md5('$password'), '$fullname', '$phone', '$email')");
    return $hsl;
    }
  function edit_user($id, $user, $pass, $name, $phone, $mail, $level){
    $res=$this->db->query("update tb_admin set user_username='$user', user_password=md5('$pass'), user_fullname='$name',
    user_phone='$phone', user_email='$mail', where user_id='$id'");
    return $res;
  }
  function del_user($id){
    $res=$this->db->query("Delete From tb_admin where user_id='$id'");
    return $res;
  }
	public function count_user(){
		$res = $this->db->get('tb_admin');
		if($res->num_rows()>0)
     {
       return $res->num_rows();
     }
     else
     {
       return 0;
     }
	}

}

 ?>
