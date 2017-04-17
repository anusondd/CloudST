<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Onhandprint extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Inventory_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = base_url('onhandprint/index');
		$config['total_rows'] = $this->Inventory_model->record_count_like($this->input->get('keyword'),$this->input->get('myword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Inventory_model->fetch_inventory($config['per_page'], $page, $this->input->get('keyword'),$this->input->get('wordname'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('onhandprint/mainpage', $data);
		$this->load->view('template/backfooter');
	}

}
