<?php

class Openflow_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function record_count($keyword) {
        $this->db->like('name_customer', $keyword);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        $this->db->from('newflows');
        return $this->db->count_all_results();
    }

    
    public function fetch_openflow($limit, $start, $keryword) {
        $this->db->like('name_customer', $keryword);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        $this->db->limit($limit, $start);
        $query = $this->db->get('newflows');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function record_count_reserve($id) {
        $this->db->like('id_flows', $id);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        $this->db->from('reserve');
        return $this->db->count_all_results();
    }

    public function fetch_openflow_reserve($limit, $start, $id) {
        $this->db->like('id_flows', $id);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        $this->db->limit($limit, $start);
        $query = $this->db->get('reserve');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function fetch_openflow_name($id) {
        $this->db->like('id', $id);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        
        $query = $this->db->get('newflows');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function entry_openflow($id=NULL) {
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'itemname' => $this->input->post('itemname'),
            'open_qty' => $this->input->post('open_qty'),
            'unit' => $this->input->post('unit'),
            'open_date' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('open_date')))),
            'open_entry' => $this->input->post('open_entry'),
            'open_location' => $this->input->post('location_id')
        );
        if ($id == NULL) {
            $this->db->insert('openflows', $data);
        } else {
            $this->db->update('openflows', $data, array('id' => $id));
        }
    }

    public function openflow($id=NULL) {
        $data = array(
            'barcode' => $this->input->post('barcode'),
            'itemname' => $this->input->post('itemname'),
            'price' => $this->input->post('price'),
            'count' => $this->input->post('count'),
            'open_date' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('open_date')))),
            'name_customer' => $this->input->post('open_entry'),
            'id_customer' => $this->input->post('open_id'),
            'id_users'    => $this->session->userdata('login_id'),
            'Tack' => $this->input->post('Tack'),
            'Net' => $this->input->post('total'),
            'flowstatus' => $this->input->post('status')
                
        );
        if ($id == NULL) {
            $this->db->insert('newflows', $data);
        } else {
            $this->db->update('newflows', $data, array('id' => $id));
        }
    }

    public function read_openflow($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('newflows');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_openflow($id) {
        $this->db->delete('newflows', array('id' => $id));
    }

}
