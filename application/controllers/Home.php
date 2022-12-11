<?php

/**
* 
*/
class Home extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
        $this->load->model('tintuc_model');
		$this->load->model('customer_model');
        $this->load->helper('date');
        $this->load->model('hotline_model');
        $this->load->library('pagination');

	}

	function index()
	{
		
		
        $total = $this->news_model->get_total();
        $this->data['total'] = $total;

		$input = array();
        $list = $this->news_model->get_list($input);
        $this->data['list'] = $list;
        
        $input_news = array();
        $list_news = $this->tintuc_model->get_list($input_news);
        $this->data['list_news'] = $list_news;

        $customer_total = $this->customer_model->get_total();
        $this->data['customer_total'] = $customer_total;	        
		$this->data['title'] = 'user/home/title';

        $config_VN['base_url'] = base_url().'home/index';
        $config_VN['total_rows'] = $this->news_model->get_total_rows_VN();
        $config_VN['per_page'] = '30';
        $config_VN['uri_segment'] = 3;
        $choice = $config_VN['total_rows'] / $config_VN['per_page'];
        $config_VN['num_links'] = floor($choice);
        $this->pagination->initialize($config_VN);

        $this->data['page_VN'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->data['links_VN'] = $this->pagination->create_links();
        $this->data['jobs_VN'] = $this->news_model->getNews_VN($config_VN['per_page'], $this->data['page_VN']);     


        if($this->input->post('ajax')) {

            $this->load->view('user/home/data', $this->data);

        } else {
            $this->data['title'] = 'user/home/title';
            $this->load->view('admin/meta',$this->data);
            $this->data['dulieu'] = 'user/home/index';
            $this->load->view('user/index', $this->data);

        }     


		// $this->load->view('user/index');
    }

	
}