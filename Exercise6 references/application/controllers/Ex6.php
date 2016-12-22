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
        $data['title'] = 'ex6 archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ex6/index', $data);
        //$this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['ex6_item'] = $this->ex6_model->get_ex6($slug);
        
        if (empty($data['ex6_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['ex6_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('ex6/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a ex6 item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->ex6_model->set_ex6();
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/success');
            $this->load->view('templates/footer');
        }
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
        
        $data['title'] = 'Edit a ex6 item';        
        $data['ex6_item'] = $this->ex6_model->get_ex6_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/edit', $data);
            $this->load->view('templates/footer');
 
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