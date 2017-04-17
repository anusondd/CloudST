<?php

class Location_model extends CI_Model
{

	public $name;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('name',$keyword);
		$this->db->from('locations');
		return $this->db->count_all_results();
	}

	public function fetch_location($limit, $start,$keryword)
	{
		$this->db->like('name',$keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get('locations');
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

	public function entry_location($id)
	{
		$this->name = $this->input->post('name');
		if($id == NULL)
		{
			$this->db->insert('locations', $this);
		}
		else
		{
			$this->db->update('locations', $this, array('id'=> $id));
		}
	}
	public function read_location($id){
		$this->db->where('id',$id);
		$query = $this->db->get('locations');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_location($id){
		$this->db->delete('locations',array('id'=>$id));
	}

}
