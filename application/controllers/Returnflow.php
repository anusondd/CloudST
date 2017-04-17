<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Returnflow extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Returnflow_model');
        $this->load->model('Item_model');
        $this->load->model('Location_model');
        $this->load->model('Inventoryflow_model');
        $this->load->model('Inventory_model');
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('template/backheader');
        $this->load->view('returnflow/newdata');
        $this->load->view('template/backfooter');
    }

    public function newdata() {
        $this->load->view('template/backheader');
        $this->load->view('returnflow/newdata');
        $this->load->view('template/backfooter');
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $this->form_validation->set_rules('open_id', 'รหัสเบิกสินค้า', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('open_qty', 'จำนวนคืน', 'required|numeric', array('required' => 'ค่าห้ามว่าง!', 'numeric' => 'ตัวเลขเท่านั้น'));
            $this->form_validation->set_rules('open_date', 'วันที่คืน', 'required', array('required' => 'ค่าห้ามว่าง!'));
            if ($this->form_validation->run() == TRUE) {

                $this->db->trans_start();
                if ($this->input->post('after_qty')-$this->input->post('open_qty') > 0) {
                  $flowstatus = 0;
                }else{
                  $flowstatus = 1;
                }

                $this->Returnflow_model->entry_returnflow($this->input->post('open_id'),$flowstatus);
                $this->Inventoryflow_model->entry_invenflow(NULL,'return');
                $this->Inventory_model->update_inventory(0, $this->input->post('open_qty'), 0, 0);
                $this->db->trans_complete();
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect('returnflow', 'refresh');
            } else {
                $data = array(
                    'error_open_id' => form_error('open_id'),
                    'error_open_qty' => form_error('open_qty'),
                    'error_open_date' => form_error('open_date'),
                    'open_id' => set_value('open_id'),
                    'open_qty' => set_value('open_qty'),
                    'return_date' => set_value('return_date'),
                    'item_id' => set_value('item_id'),
                    'location_id' => set_value('location_id'),
                    'barcode' => set_value('barcode'),
                    'itemname' => set_value('itemname'),
                    'after_qty' => set_value('after_qty'),
                    'unit' => set_value('unit'),
                    'open_date' => set_value('open_date'),
                    'open_entry' => set_value('open_entry'),
                    'location_name' => set_value('location_name')
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('returnflow/newdata');
            } else {
                redirect('returnflow/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['result'] = $this->Itemtype_model->read_returnflow($id);
        $this->load->view('template/backheader');
        $this->load->view('returnflow/edit', $data);
        $this->load->view('template/backfooter');
    }

    public function remove($id) {
        $this->Itemtype_model->remove_returnflow($id);
        redirect('returnflow', 'refresh');
    }

    public function openup() {
        $config = array();
        $config['base_url'] = base_url('returnflow/openup');
        $config['total_rows'] = $this->Returnflow_model->record_count($this->input->get('keyword'));
        $config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['results'] = $this->Returnflow_model->fetch_returnflow($config['per_page'], $page, $this->input->get('keyword'));
        $data['link'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];
        $this->load->view('popup/openup', $data);
    }

}
