<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_member');
    }

    public function index()
    {
        $data['del'] = $this->m_member->getMember();
        $data['edit'] = $this->m_member->getMember();
        $data['data'] = $this->m_member->getMember();
        $this->load->view('admin/v_member', $data);
        
    }

    function delMember(){
        $id = $this->input->post('id');
        $this->m_member->delMember($id);
    }

}

/* End of file Member.php */


?>