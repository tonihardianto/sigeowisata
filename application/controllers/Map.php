<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_wisata');
        $this->load->model('m_penginapan');
        
        
    }

    public function index()
    {
        $data['inap'] = $this->m_penginapan->getData();
        $data['budaya'] = $this->m_wisata->budaya();
        $data['kuliner'] = $this->m_wisata->kuliner();
        $data['alam'] = $this->m_wisata->alam();
        $data['kota'] = $this->m_wisata->kota();
        $data['data'] = $this->m_wisata->getWisata();
        $this->load->view('v_map', $data);
    }

    function cluster()
    {
        $data['inap'] = $this->m_penginapan->getData();
        $data['budaya'] = $this->m_wisata->budaya();
        $data['kuliner'] = $this->m_wisata->kuliner();
        $data['alam'] = $this->m_wisata->alam();
        $data['kota'] = $this->m_wisata->kota();
        $data['data'] = $this->m_wisata->getWisata();
        $this->load->view('v_cluster', $data);
    }

}

/* End of file Map.php */


?>