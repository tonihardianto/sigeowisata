<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
    }

    public function index()
    {
        $this->load->view('v_event');
    }

    function getData(){
        $json = array();
        $data['item'] = $this->m_event->getDataJson();

        foreach ($data['item']->result_array() as $i) {
            $json[] = array(
                'backgroundColor' => '#40A3ED',
                'borderColor'     => '#40A3ED',
                'title'           => $i['event_nama'],
                'start'           => $i['event_start'],
                'allDay'          => true,

            );
        }
        echo json_encode($json);
    }

}

/* End of file Event.php */


?>