<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_tamu');
    }

    public function index()
    {
        $data['del'] = $this->m_tamu->getTamu();
        $data['data'] = $this->m_tamu->getTamu();
        $this->load->view('admin/v_tamu', $data);
        
    }

    function delete(){
        $id = $this->input->post('id');
        $this->m_tamu->delTamu($id);

        $this->session->set_flashdata('msg', 'Data Berhasil Dihapus');
        redirect('Admin/Tamu');
    }


}

/* End of file Tamu.php */


?>