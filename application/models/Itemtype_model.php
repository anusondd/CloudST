<?php

class Itemtype_model extends CI_Model
{

	public $name;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('name',$keyword);
		$this->db->from('itemtypes');
		return $this->db->count_all_results();
	}

	public function fetch_itemtype($limit, $start,$keryword)
	{
		$this->db->like('name',$keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get('itemtypes');
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

	public function entry_itemtype($id)
	{
		$this->name = $this->input->post('name');
		if($id == NULL)
		{
			$this->db->insert('itemtypes', $this);
		}
		else
		{
			$this->db->update('itemtypes', $this, array('id'=> $id));
		}
	}
	public function read_itemtype($id){
		$this->db->where('id',$id);
		$query = $this->db->get('itemtypes');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_itemtype($id){
		$this->db->delete('itemtypes',array('id'=>$id));
	}

}
