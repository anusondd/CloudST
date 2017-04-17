<?php

class Item_model extends CI_Model {

    public $name;

    public function __construct() {
        parent::__construct();
    }

    public function record_count($keyword) {
        $this->db->like('name', $keyword);
        $this->db->from('items');
        return $this->db->count_all_results();
    }

    public function fetch_item($limit, $start, $keryword) {
        $this->db->like('name', $keryword);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        $this->db->limit($limit, $start);
        $query = $this->db->get('items');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function entry_item($id, $filename = '') {

        $data = array(
            'filename' => $filename,
            'name' => $this->input->post('name'),
            'barcode' => $this->input->post('barcode'),
            'price' => $this->input->post('price'),
            'unit'=>$this->input->post('unit'),
            'itemtype_id' => $this->input->post('itemtype_id'),
            'description' => $this->input->post('description'),
            'id_users'    => $this->session->userdata('login_id')
        );
        if ($id == NULL) {
            $this->db->insert('items', $data);
        } else {
            $this->db->update('items', $data, array('id' => $id));
        }
    }

    public function read_item($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('items');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_item($id) {
        $this->db->delete('items', array('id' => $id));
    }

}
