<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'Admin/Login';
            redirect($url);
        }
    }

    public function index()
    {
        
            $this->load->view('admin/v_index');
        
    }

}

/* End of file Dashboard.php */


?>