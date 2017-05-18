<?php

class User_model extends CI_Model {

    public $name;

    public function __construct() {
        parent::__construct();
    }

    public function record_count($keyword) {
        $this->db->like('username', $keyword);
        $this->db->from('users');
        return $this->db->count_all_results();
    }

    public function fetch_user($limit, $start, $keryword) {
        $this->db->like('username', $keryword);
        $this->db->limit($limit, $start);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }

    public function entry_user($id, $filename = '') {
        $data = array(
            'filename' => $filename,
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'phone' => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'department' => $this->input->post('department'),
            'user_type' => $this->input->post('user_type')
        );

        if ($this->input->post('password') <> '') {
            $data['password'] = $this->salt_pass($this->input->post('username'), $this->input->post('password'));
        }

        if ($id == NULL) {
            $this->db->insert('users', $data);
        } else {
            $this->db->update('users', $data, array('id' => $id));
        }
    }

    public function add_user($id) {
        
        $data = array(
            //'filename' => $filename,
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'phone' => $this->input->post('phone'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            //'department' => $this->input->post('department'),
            'user_type' => 'root'                 //$this->input->post('user_type')
        );

        if ($this->input->post('password') <> '') {
            $data['password'] = $this->salt_pass($this->input->post('username'), $this->input->post('password'));
        }

        if ($id == NULL) {
            $this->db->insert('users', $data);
        } else {
            $this->db->update('users', $data, array('id' => $id));
        }
    }

    public function read_user($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_user($id) {
        $this->db->delete('users', array('id' => $id));
    }

    public function salt_pass($salt, $pass) {
        return md5($salt . $pass);
    }

    public function fetch_user_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $this->salt_pass($username, $password));
        $query = $this->db->get('users');
        return $query->row();
    }

    public function record_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $this->salt_pass($username, $password));
        return $this->db->count_all_results('users');
    }

}
