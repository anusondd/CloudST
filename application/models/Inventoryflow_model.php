<?php

class Inventoryflow_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function entry_invenflow($id=NULL,$transtype='') {
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'itemname' => $this->input->post('itemname'),
            'location_id' => $this->input->post('location_id'),
            'locationname' => $this->input->post('location_name'),
            'itemname' => $this->input->post('itemname'),
            'transqty' => $this->input->post('open_qty'),
            'unit' => $this->input->post('unit'),
            'transtype' => $transtype,
            'transdate' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('open_date')))),
            'created' => date('Y-m-d H:i:s'),
            'user_id' => $this->session->userdata('login_id')
        );
        if ($id == NULL) {
            $this->db->insert('inventoryflows', $data);
        } else {
            $this->db->update('inventoryflows', $data, array('id' => $id));
        }
    }
    public function record_count($keyword,$fdate='01/01/2000',$tdate='31/12/2030',$transtype='') {
        $this->db->like('inventoryflows.itemname',$keyword);
        $this->db->where('inventoryflows.transdate >=',date('Y-m-d',strtotime(str_replace('/','-',$fdate))));
        $this->db->where('inventoryflows.transdate <=',date('Y-m-d',strtotime(str_replace('/','-',$tdate))));
        $this->db->where_in('inventoryflows.transtype',$transtype);
        $this->db->from('inventoryflows');
        return $this->db->count_all_results();
    }
    public function fetch_inventory($limit, $start,$keyword,$fdate='01/01/2000',$tdate='31/12/2030',$transtype='')
    {
      $this->db->select("inventoryflows.*,locations.name as locname,items.barcode,case transtype when 'open' then 'เบิกสินค้า' when 'return' then 'คืนสินค้า' else 'รับเข้าสินค้า' end as transtype");
      $this->db->like('inventoryflows.itemname',$keyword);
      $this->db->where('inventoryflows.transdate >=',date('Y-m-d',strtotime(str_replace('/','-',$fdate))));
      $this->db->where('inventoryflows.transdate <=',date('Y-m-d',strtotime(str_replace('/','-',$tdate))));
        $this->db->where_in('inventoryflows.transtype',$transtype);
      $this->db->limit($limit, $start);
      $this->db->from('inventoryflows');
      $this->db->join('locations','inventoryflows.location_id=locations.id','inner');
      $this->db->join('items','inventoryflows.item_id=items.id','inner');
      $this->db->order_by('created', 'ASC');
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
