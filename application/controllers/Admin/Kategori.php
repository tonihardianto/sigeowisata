<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->library('upload');
        
        $this->load->model('m_kategori');
        
    }


    public function index()
    {
        $data['kat'] = $this->m_kategori->getKat();
        $data['del'] = $this->m_kategori->getKat();
        $data['data'] = $this->m_kategori->getKat();
        $this->load->view('admin/v_kategori',$data);
        
    }
    function addKat(){
        $kat = $this->input->post('nama');
        // $m = $this->input->post('marker');

        $config['upload_path'] = './asset/marker/'; //path folder
        $config['allowed_types'] = 'png'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);


        $this->upload->do_upload('marker');
        $gbr = $this->upload->data();
        $marker = $gbr['file_name'];

        

        // echo $markermap;

        $this->m_kategori->addKat($kat,$marker);

        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Kategori');
    }

    function editKat(){
        $id = $this->input->post('id');
        $kat = $this->input->post('nama');

        $config['upload_path'] = './asset/marker/'; //path folder
        $config['allowed_types'] = 'png'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //Enkripsi nama yang terupload

        $this->upload->initialize($config);


        $this->upload->do_upload('marker');
        $gbr = $this->upload->data();
        $icon = $this->input->post('icon');
        $path = './asset/marker/'.$icon;
        unlink($path);

        $fileuser = $gbr['file_name'];

        $this->m_kategori->updKat($kat,$fileuser,$id);
        $this->session->set_flashdata('msg', 'Data Berhasil diperbarui.');
        redirect('Admin/Kategori');
        
    }

    function del_kat(){
        $id = $this->input->post('id');

        $this->m_kategori->delKat($id);

        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Kategori');
    }

}

/* End of file Kategori.php */


?>