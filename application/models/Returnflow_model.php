<?php

class Returnflow_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function record_count($keyword) {
        $this->db->like('id', $keyword);
        $this->db->where('flowstatus',0);
        $this->db->from('openflows');
        return $this->db->count_all_results();
    }

    public function fetch_returnflow($limit, $start, $keryword) {
        $this->db->select('openflows.*,items.barcode,locations.name');
        $this->db->like('openflows.id', $keryword);
        $this->db->limit($limit, $start);
        $this->db->from('openflows');
        $this->db->join('items','openflows.item_id=items.id','inner');
        $this->db->join('locations','openflows.open_location=locations.id');
        $this->db->where('openflows.flowstatus',0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function entry_returnflow($id=NULL,$flowstatus=0) {
            $this->db->set('return_qty', 'return_qty+' . (int)$this->input->post('open_qty'),FALSE);
            $this->db->set('return_date',date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('open_date')))));
            $this->db->set('return_entry', $this->input->post('open_entry'));
            $this->db->set('return_location', $this->input->post('location_id'));
            $this->db->set('flowstatus', $flowstatus);
            $this->db->where('id',$id);
            $this->db->update('openflows');
    }

    public function read_returnflow($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('inventoryflows');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_returnflow($id) {
        $this->db->delete('inventoryflows', array('id' => $id));
    }

}
