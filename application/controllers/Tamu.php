<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_wisata');
        $this->load->model('m_penginapan');
        $this->load->model('m_tamu');

    }

    public function index()
    {
        
    }
    
    function simpan(){
        $date = date('Y-m-d');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $data = $this->m_tamu->simpan($nama,$email,$pesan,$date);
        echo json_encode($data);
    }

}

/* End of file Tamu.php */


?>