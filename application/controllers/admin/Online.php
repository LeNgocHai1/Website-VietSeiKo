<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Online extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('customer_model');
        $this->load->helper('date');
        $this->load->model('admin_model');	
	}

	function index()
	{
		$input = array();
        $list = $this->news_model->get_list($input);
        $this->data['list'] = $list;

        $admin_list = $this->admin_model->get_list($input);
        $this->data['admin_list'] = $admin_list;
    
        $total = $this->news_model->get_total();
        $this->data['total'] = $total;

        $customer_total = $this->customer_model->get_total();
        $this->data['customer_total'] = $customer_total;	


		$this->data['title'] = 'admin/online/title';
        $this->load->view('admin/meta',$this->data);
		// $data = array();
		$this->data['dulieu'] = 'admin/online/index';
		$this->load->view('admin/main', $this->data);
	}

	/*
     * Thuc hien dang xuat
     */
    function logout()
    {
        if($this->session->userdata('login'))
        {
            $this->session->unset_userdata('login');
        }
        redirect(admin_url('login'));
    }

	


}