<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Item_model');
        $this->load->model('Itemtype_model');
        $this->load->model('User_model');
    }

    public function index() {
        $config = array();
        $config['base_url'] = base_url('item/index');
        $config['total_rows'] = $this->Item_model->record_count($this->input->get('keyword'));
        $config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['results'] = $this->Item_model->fetch_item($config['per_page'], $page, $this->input->get('keyword'));
        $data['link'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];
        $this->load->view('template/backheader');
        $this->load->view('item/mainpage', $data);
        $this->load->view('template/backfooter');
    }

    public function newdata() {
        
        $data['results'] = $this->Itemtype_model->fetch_itemtype(0, 0, '');
        $this->load->view('template/backheader');
        $this->load->view('item/newdata', $data);
        $this->load->view('template/backfooter');
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            /*
             * อัพโหลดรูปภาพ******************************************************
             */
            $config['upload_path'] = './pictures/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 1; // 1mb
            $config['overwrite'] = TRUE;
            $config['file_name'] = ($this->input->post('datafile') == '') ? uniqid() : $this->input->post('datafile');

            $this->load->library('upload', $config);
            $no_file_error = "<p>You did not select a file to upload.</p>";
            if (!$this->upload->do_upload('userfile') && $this->upload->display_errors() != $no_file_error) {
                $checkfile = FALSE;
            } else {
                $checkfile = TRUE;
                /*
                 * ปรับขนาดรูปภาพ*************************************************
                 */
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $config['maintain_ratio'] = true;
                $config['master_dim'] = 'height';
                $config['width'] = 400;
                $config['height'] = 400;
                $config['new_image'] = 'view_' . $this->upload->file_name;


                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();

                $resizeimg['image_library'] = 'gd2';
                $resizeimg['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $resizeimg['maintain_ratio'] = true;
                $resizeimg['master_dim'] = 'height';
                $resizeimg['width'] = 100;
                $resizeimg['height'] = 100;
                $resizeimg['new_image'] = 'thumb_' . $this->upload->file_name;


                $this->image_lib->initialize($resizeimg);
                $this->image_lib->resize();
                $this->image_lib->clear();

                $snailimg['image_library'] = 'gd2';
                $snailimg['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $snailimg['maintain_ratio'] = true;
                $snailimg['master_dim'] = 'height';
                $snailimg['width'] = 50;
                $snailimg['height'] = 50;
                $snailimg['new_image'] = 'sm_' . $this->upload->file_name;


                $this->image_lib->initialize($snailimg);
                $this->image_lib->resize();
                $this->image_lib->clear();
                //--------------------------------------------------------------
                @unlink($this->upload->upload_path . $this->upload->file_name);
            }

            //------------------------------------------------------------------
            $this->form_validation->set_rules('name', 'ชื่อสินค้า', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('itemtype_id', 'ชื่อประเภทสินค้า', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('price', 'ราคา', 'numeric', array('numeric' => 'ค่าไม่ใช้ตัวเลข'));
            $this->form_validation->set_rules('barcode', 'รหัสสินค้า', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('unit', 'หน่วยนับสินค้า', 'required', array('required' => 'ค่าห้ามว่าง'));

            if ($this->form_validation->run() == TRUE && $checkfile == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );

                $data = $this->upload->data();
                if ($_FILES['userfile']['name'] <> '') {
                    $datafile = ($this->input->post('datafile') == '') ? $data['file_name'] : $this->input->post('datafile');
                } else {
                    $datafile = ($this->input->post('id') == '') ? '' : $this->input->post('datafile');
                }


                $this->Item_model->entry_item($this->input->post('id'), $datafile);


                redirect('item', 'refresh');
            } else {
                $data = array(
                    'error_name' => form_error('name'),
                    'name' => set_value('name'),
                    'error_itemtype_id' => form_error('itemtype_id'),
                    'itemtype_id' => set_value('itemtype_id'),
                    'error_price' => form_error('price'),
                    'price' => set_value('price'),
                    'err_filename' => form_error('filename'),
                    'err_filename' => $this->upload->display_errors(),
                    'barcode' => set_value('barcode'),
                    'error_barcode' => form_error('barcode'),
                    'error_unit' => form_error('unit'),
                    'unit' => set_value('unit'),
                );
                $this->session->set_flashdata($data);

                if ($_FILES['userfile']['name'] <> '' && $this->input->post('datafile') == '') {
                    @unlink($this->upload->upload_path . "view_" . $this->upload->file_name);
                    @unlink($this->upload->upload_path . "thumb_" . $this->upload->file_name);
                    @unlink($this->upload->upload_path . "sm_" . $this->upload->file_name);
                }
            }
            if ($this->input->post('id') == NULL) {
                redirect('item/newdata');
            } else {
                redirect('item/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['results'] = $this->Itemtype_model->fetch_itemtype(0, 0, '');
        $data['item'] = $this->Item_model->read_item($id);
        $this->load->view('template/backheader');
        $this->load->view('item/edit', $data);
        $this->load->view('template/backfooter');
    }

    public function remove($id) {
        $result = $this->Item_model->read_item($id);
        @unlink('./pictures/view_' . $result->filename);
        @unlink('./pictures/thumb_' . $result->filename);
        @unlink('./pictures/sm_' . $result->filename);

        $this->Item_model->remove_item($id);
        redirect('item', 'refresh');
    }

}
