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
        $data['nick_name'] = 'My archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ex6/index', $data);    
	}
 
    public function view($nick_name = NULL)
    {
        $data['ex6_item'] = $this->ex6_model->get_ex6($nick_name);
        
        /*if (empty($data['ex6_item']))
        {
            show_404();
        }*/
 
        $data['nick_name'] = $data['ex6_item']['nick_name'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('ex6/view', $data);
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['full_name'] = 'Create data entry';
 
        $this->form_validation->set_rules('full_name', 'full_name', 'required');
		$this->form_validation->set_rules('nick_name', 'nick_name', 'required');
        $this->form_validation->set_rules('email_address', 'email_address', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('cellphone_number', 'cellphone_number', 'required');
 
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
        
        if (empty($user_id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['nick_name'] = 'Edit data entry';        
        $data['ex6_item'] = $this->ex6_model->get_ex6_by_id($user_id);
        
        $this->form_validation->set_rules('full_name', 'full_name', 'required');
		$this->form_validation->set_rules('nick_name', 'nick_name', 'required');
        $this->form_validation->set_rules('email_address', 'email_address', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('cellphone_number', 'cellphone_number', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ex6/edit', $data); 
        }
        else
        {
            $this->ex6_model->set_ex6($user_id);
            $this->load->view('ex6/success');
            redirect( base_url() . 'index.php/ex6');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
                
        $ex6_item = $this->ex6_model->get_ex6_by_id($user_id);
        
        $this->ex6_model->delete_ex6($user_id);        
        redirect( base_url() . 'index.php/ex6');        
    }
}