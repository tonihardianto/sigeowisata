<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Penginapan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_penginapan');
        $this->load->model('m_member');
        
    }
    public function index()
    {
        $data['data']=$this->m_penginapan->getData();
        $data['del'] = $this->m_penginapan->getData();
        $this->load->view('penginapan/v_inap', $data);
        
    }
    function addInap(){
        $uid = $this->session->userdata('ses_id');
        
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $fas = $this->input->post('fasilitas');
        $long = $this->input->post('lng');
        $lat = $this->input->post('lat');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_penginapan->saveInap($nama,$kat,$fas,$long,$lat,$alamat,$desc,$uid);
        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Penginapan');
    }

    function editInap(){

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $fas = $this->input->post('fasilitas');
        $long = $this->input->post('lng');
        $lat = $this->input->post('lat');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_penginapan->editInap($nama, $kat, $fas, $long, $lat, $alamat, $desc,$id);
        $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
        redirect('Admin/penginapan');
    }
    
    function delete(){
        $id = $this->input->post('id');
        
        $this->m_penginapan->delData($id);
        $this->session->set_flashdata('msg', 'Data Berhasil dihapus.');
        redirect('Admin/penginapan');
        
    }


    function add(){
        $data['add']=$this->m_penginapan->getData();
        $this->load->view('penginapan/v_addinap', $data);
        
    }

    function edit(){
        // $id = $this->input->post('id');

        $data['data'] = $this->m_penginapan->getEdit($_GET['id']);
        $this->load->view('penginapan/v_inap_edit', $data);
    }

    function approve(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $fasilitas = $this->input->post('fasilitas');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');
        $m_id = $this->input->post('member');

        $status = "Approved";
        $this->m_member->approveInap($id, $status);
        $this->m_penginapan->saveByMember($nama,$kat,$fasilitas,$long, $lat, $alamat,$desc,$m_id);

        $this->session->set_flashdata('msg', 'Data Berhasil Disetujui.');
        redirect('Admin/Member/');
    }
    
    function reject (){
        $id = $this->input->post('id');
        // $id1 = $this->input->post('id1');
        $status = "Rejected";
        $this->m_member->rejectInap($id, $status);

        $this->session->set_flashdata('msg', 'Data Penginapan Ditolak.');
        redirect('Admin/Member');
    }
    
    

}

/* End of file Penginapan.php */


?>