<?php

/*
 * ทำการอัพเดทและ insert ข้อมูล item,locatoin,username
 */

class Inventory_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function record_count($item_id, $location_id) {
        $this->db->where('item_id', $item_id);
        $this->db->where('location_id', $location_id);
        $this->db->from('inventories');
        return $this->db->count_all_results();
    }
    public function record_count_like($itemname='',$locationname=''){
      $this->db->like('items.name',$itemname);
      $this->db->like('locations.name',$locationname);
      $this->db->from('items');
      $this->db->join('inventories','items.id=inventories.item_id','left');
      $this->db->join('locations','locations.id=inventories.location_id','left');
      return $this->db->count_all_results();
    }

    public function entry_inventory($open = 0, $adjustment = 0, $receipt = 0, $issue = 0) {
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'location_id' => $this->input->post('location_id'),
            'open' => $open,
            'adjustment' => $adjustment,
            'receipt' => $receipt,
            'issue' => $issue
        );
        $this->db->insert('inventories', $data);
    }

    public function update_inventory($open = 0, $adjustment = 0, $receipt = 0, $issue = 0) {
        $this->db->set('open', 'open+' . (int) $open, FALSE);
        $this->db->set('adjustment', 'adjustment+' . (int) $adjustment, FALSE);
        $this->db->set('receipt', 'receipt+' . (int) $receipt, FALSE);
        $this->db->set('issue', 'issue+' . (int) $issue, FALSE);
        $this->db->where('item_id', $this->input->post('item_id'));
        $this->db->where('location_id', $this->input->post('location_id'));
        $this->db->update('inventories');
    }

    public function read_inventory($item_id, $location_id) {
        $this->db->where('item_id', $item_id);
        $this->db->where('location_id', $location_id);
        $query = $this->db->get('inventories');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function fetch_inventory($limit, $start,$keryword,$wordname)
    {
      $this->db->select('COALESCE(open,0)+COALESCE(adjustment,0)+COALESCE(receipt,0)-COALESCE(issue,0) as onqty ,items.id as itemid,items.name as itemname,items.barcode,items.unit,items.filename,items.price,locations.name as locname,locations.id as locid');
      $this->db->like('items.name',$keryword);
      $this->db->like('locations.name',$wordname);
      $this->db->limit($limit, $start);
      $this->db->from('items');
      $this->db->join('inventories','items.id=inventories.item_id','left');
      $this->db->join('locations','locations.id=inventories.location_id','left');
      $query = $this->db->get();
      if($query->num_rows() > 0)
      {
        foreach($query->result() as $row)
        {
          $data[] = $row;
        }
        return $data;
      }
      return FALSE;
    }

}
