<?php

class Customer_model extends CI_Model {

    public $name;

    public function __construct() {
        parent::__construct();
    }

    public function record_count($keyword) {
        $this->db->like('firstname', $keyword);
        $this->db->from('customers');
        return $this->db->count_all_results();
    }

    public function fetch_user($limit, $start, $keryword) {
        $this->db->like('firstname', $keryword);
        $this->db->where('id_users', $this->session->userdata('login_id'));
        $this->db->limit($limit, $start);
        $query = $this->db->get('customers');
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
            /*'username' => $this->input->post('username'),*/
            'email' => $this->input->post('email'),
            'Facebook' => $this->input->post('Facebook'),
            'line' => $this->input->post('line'),
            'instargram' => $this->input->post('instargram'),
            'Address' => $this->input->post('Address'),
            'City' => $this->input->post('City'),
            'State' => $this->input->post('State'),
            'Postal_Code' => $this->input->post('Postal_Code'),
            'Country' => $this->input->post('Country'),

            'id_users' => $this->session->userdata('login_id')

        );

        /*if ($this->input->post('password') <> '') {
            $data['password'] = $this->salt_pass($this->input->post('username'), $this->input->post('password'));
        }*/

        if ($id == NULL) {
            $this->db->insert('customers', $data);
        } else {
            $this->db->update('customers', $data, array('id' => $id));
        }
    }

    public function add_user($id) {
        
        $data = array(
            //'filename' => $filename,
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            //'phone' => $this->input->post('phone'),
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

    public function read_customer($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('customers');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_customer($id) {
        $this->db->delete('customers', array('id' => $id));
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
