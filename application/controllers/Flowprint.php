<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flowprint extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Inventoryflow_model');
        $this->load->helper('date');
    }

    public function index() {
        if ($this->input->get('fdate') != "") {
            $fdate = $this->input->get('fdate');
        } else {
            $fdate = '01/01/2000';
        }

        if ($this->input->get('tdate') != "") {
            $tdate = $this->input->get('tdate');
        } else {
            $tdate = '31/12/2030';
        }

        $config = array();
        $config['base_url'] = base_url('flowprint/index');
        $config['total_rows'] = $this->Inventoryflow_model->record_count($this->input->get('keyword'), $fdate, $tdate, $this->input->get('transtype'));
        $config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['results'] = $this->Inventoryflow_model->fetch_inventory($config['per_page'], $page, $this->input->get('keyword'), $fdate, $tdate, $this->input->get('transtype'));
        $data['link'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];
        $this->load->view('template/backheader');
        $this->load->view('flowprint/mainpage', $data);
        $this->load->view('template/backfooter');
    }

}
