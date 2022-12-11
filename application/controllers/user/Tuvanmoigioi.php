<?php
class Tuvanmoigioi extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/tuvanmogioi/tuvanmoigioi_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/tuvanmogioi/tuvanmoigioi';
		$this->load->view('user/index', $this->data);
	}	
}