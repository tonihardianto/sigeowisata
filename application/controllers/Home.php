<?php
 defined('BASEPATH') OR exit('No direct script allowed');

class Home extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_setting');
        $this->load->model('m_kategori');
        
        
    }
    function index(){
        $data['kat'] = $this->m_kategori->getData();
        $data['home'] = $this->m_setting->get_setting();
        $this->load->view('v_index',$data);


    }
  }
