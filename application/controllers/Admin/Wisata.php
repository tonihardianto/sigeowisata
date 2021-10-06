<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_kategori');
        $this->load->model('m_wisata');
        $this->load->model('m_member');
    }

    public function index()
    {
        $data['del'] =$this->m_wisata->getWisata();
        $data['data']=$this->m_wisata->getWisata();
        $this->load->view('admin/v_wisata',$data);
        
    }

    function add_wisata(){
        $aid = $this->session->userdata('ses_id');
        
        $nama = $this->input->post('wisata');
        $katid = $this->input->post('kategori');

        $tiket = $this->input->post('tiket');
        // $parkir = $this->input->post('parkir');
        $lat = $this->input->post('lat');
        $long = $this->input->post('lng');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_wisata->addWisata($nama,$katid,$tiket,$lat,$long,$alamat,$desc, $aid);
        // $this->m_wisata->detWisata($tiket,$lat,$long,$alamat,$desc);

        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Wisata');
        
    }
    function editWisata(){

        $id = $this->input->post('id');
        $id1 = $this->input->post('id1');;
        $nama = $this->input->post('wisata');
        $katid = $this->input->post('kategori');

        $tiket = $this->input->post('tiket');
        // $parkir = $this->input->post('parkir');
        $lat = $this->input->post('lat');
        $long = $this->input->post('lng');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_wisata->edWisata($nama, $katid,$tiket, $lat, $long, $alamat, $desc,$id);
        // $this->m_wisata->eDetWisata($tiket, $lat, $long, $alamat, $desc, $id1);

        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Wisata');
    }
    function delete(){
        $id = $this->input->post('id');
        $id1 = $this->input->post('id1');
        $this->m_wisata->delWisata($id);
        // $this->m_wisata->delDetWisata($id1);

        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Wisata');

    }

    function add(){
        $data['kat'] = $this->m_kategori->getKat();
        $this->load->view('admin/v_wisata_add',$data);
    }
    function edit(){
        $data['kat'] = $this->m_kategori->getKat();
        $data['data'] = $this->m_wisata->getEdit($_GET['id']);
        $this->load->view('admin/v_wisata_edit', $data);
        
    }

    function approve(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $tiket = $this->input->post('tiket');
        $long = $this->input->post('long');
        $lat = $this->input->post('lat');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');
        $m_id = $this->input->post('member');

        $status = "Approved";
        $this->m_member->approve($id,$status);
        $this->m_wisata->addByMember($nama,$kategori,$m_id);
        $this->m_wisata->detWisata($tiket, $lat, $long,$alamat,$desc);

        $this->session->set_flashdata('msg', 'Data Wisata Disetujui.');
        redirect('Admin/Member');
    }

    function reject(){
        $id = $this->input->post('id');
        // $id1 = $this->input->post('id1');
        $status = "Rejected";
        $this->m_member->reject($id, $status);

        $this->session->set_flashdata('msg', 'Data Wisata Ditolak.');
        redirect('Admin/Member');
    }

    function byMember(){
        $data['re'] = $this->m_member->inapByMember($_GET['id']);
        $data['in'] = $this->m_member->inapByMember($_GET['id']);
        $data['inap'] = $this->m_member->inapByMember($_GET['id']);

        $data['id'] = $this->m_member->wisataByMember($_GET['id']);
        $data['tolak'] = $this->m_member->wisataByMember($_GET['id']);
        $data['data'] = $this->m_member->wisataByMember($_GET['id']);
        $data['ap'] = $this->m_member->wisataByMember($_GET['id']);

        $this->load->view('admin/v_wisata_member', $data);
        
    }

}

/* End of file Wisata.php */


?>