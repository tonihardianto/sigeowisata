<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_wisata');
        $this->load->model('m_penginapan');
    }

    public function index()
    {
        echo "404 Not Found!";
    }

    function wisata(){
        $id = $_GET['id'];
        $data['map'] = $this->m_wisata->getWisataById($id);
        $data['data'] = $this->m_wisata->getWisataById($id);
        $this->load->view('v_detail_wisata', $data);
    }

    function penginapan(){
        $id = $_GET['id'];
        $data['data'] = $this->m_penginapan->getDataId($id);
        $data['map'] = $this->m_penginapan->getDataId($id);
        $this->load->view('v_detail_inap', $data);
    }

}

/* End of file Informasi.php */


?>