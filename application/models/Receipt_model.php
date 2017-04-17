<?php

class Receipt_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function record_count($keyword) {
        $this->db->like('name', $keyword);
        $this->db->from('inventoryflows');
        return $this->db->count_all_results();
    }

    public function fetch_receipt($limit, $start, $keryword) {
        $this->db->like('name', $keryword);
        $this->db->limit($limit, $start);
        $query = $this->db->get('inventoryflows');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function entry_receipt($id=NULL) {
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'itemname' => $this->input->post('itemname'),
            'qty' => $this->input->post('open_qty'),
            'unit' => $this->input->post('unit'),
            'receipt_date' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('open_date')))),
            'receipt_entry' => $this->input->post('open_entry'),
            'location_id' => $this->input->post('location_id')
        );
        if ($id == NULL) {
            $this->db->insert('receipts', $data);
        } else {
            $this->db->update('receipts', $data, array('id' => $id));
        }
    }

    public function entry_reserve($id=NULL) {
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'itemname' => $this->input->post('itemname'),
            'count' => $this->input->post('open_qty'),
            'unit' => $this->input->post('unit'),
            'price' => $this->input->post('price'),
            'barcode' => $this->input->post('barcode'),
            'id_flows' => $this->input->post('id_flows'),
            'id_users' => $this->session->userdata('login_id')
        );
        if ($id == NULL) {
            $this->db->insert('reserve', $data);
        } else {
            $this->db->update('reserve', $data, array('id' => $id));
        }
    }

    public function read_receipt($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('inventoryflows');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_receipt($id) {
        $this->db->delete('inventoryflows', array('id' => $id));
    }

}
