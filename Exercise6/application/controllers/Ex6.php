<?php
class Ex6 extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ex6_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['ex6'] = $this->ex6_model->get_ex6();
        $data['full_name'] = 'ex6 archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ex6/index', $data);    }
 
    public function view($full_name = NULL)
    {
        $data['ex6_item'] = $this->ex6_model->get_ex6($full_name);
        
        if (empty($data['ex6_item']))
        {
            show_404();
        }
 
        $data['full_name'] = $data['ex6_item']['full_name'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('ex6/view', $data);
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['full_name'] = 'Create a ex6 item';
 
        $this->form_validation->set_rules('full_name', 'full_name', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/create'); 
        }
        else
        {
            $this->ex6_model->set_ex6();
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/success');        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['full_name'] = 'Edit a ex6 item';        
        $data['ex6_item'] = $this->ex6_model->get_ex6_by_id($id);
        
        $this->form_validation->set_rules('full_name', 'full_name', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/edit', $data); 
        }
        else
        {
            $this->ex6_model->set_ex6($id);
            //$this->load->view('ex6/success');
            redirect( base_url() . 'index.php/ex6');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $ex6_item = $this->ex6_model->get_ex6_by_id($id);
        
        $this->ex6_model->delete_ex6($id);        
        redirect( base_url() . 'index.php/ex6');        
    }
}