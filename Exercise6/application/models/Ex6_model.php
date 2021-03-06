<?php
class Ex6_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_ex6($nick_name = FALSE)
    {
        if ($nick_name === FALSE)
        {
            $query = $this->db->get('ex6');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ex6', array('nick_name' => $nick_name));
        return $query->row_array();
    }
    
    public function get_ex6_by_id($user_id = 0)
    {
        if ($user_id === 0)
        {
            $query = $this->db->get('ex6');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ex6', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    public function set_ex6($user_id = 0)
    {
        $this->load->helper('url');
 
        $full_name = url_title($this->input->post('nick_name'), 'dash', TRUE);
 
        $data = array(
            'full_name' => $this->input->post('full_name'),
            'nick_name' => $this->input->post('nick_name'),
			'email_address' => $this->input->post('email_address'),
			'home_address' => $this->input->post('home_address'),
			'gender' => $this->input->post('gender'),
			'cellphone_number' => $this->input->post('cellphone_number'),
            'comments' => $this->input->post('comments')
        );
        
        if ($user_id == 0) {
            return $this->db->insert('ex6', $data);
        } else {
            $this->db->where('user_id', $user_id);
            return $this->db->update('ex6', $data);
        }
    }
    
    public function delete_ex6($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->delete('ex6');
    }
}