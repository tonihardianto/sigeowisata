<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_event');
    }

    public function index()
    {
        $data['data'] = $this->m_event->getEvent();
        $data['edit'] = $this->m_event->getEvent();
        $data['del'] = $this->m_event->getEvent();

        $this->load->view('admin/v_event', $data);
        
    }

    function tambah(){
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $mulai = $this->input->post('mulai');
        $akhir = $this->input->post('akhir');

        $this->m_event->simpan($nama,$tempat,$mulai,$akhir);
        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('admin/event');
    }

    function edit(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $mulai = $this->input->post('mulai');
        $akhir = $this->input->post('akhir');

        $this->m_event->edit($id, $nama, $tempat, $mulai, $akhir);
        $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
        redirect('admin/event');
    }

    function delete(){
        $id = $this->input->post('id');

        $this->m_event->delete($id);
        $this->session->set_flashdata('msg', 'Data Berhasil dihapus.');
        redirect('admin/event');
    }

}

/* End of file Event.php */


?>