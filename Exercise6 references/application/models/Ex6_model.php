<?php
class Ex6_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_ex6($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('ex6');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ex6', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_ex6_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('ex6');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ex6', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_ex6($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            return $this->db->insert('ex6', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('ex6', $data);
        }
    }
    
    public function delete_ex6($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('ex6');
    }
}