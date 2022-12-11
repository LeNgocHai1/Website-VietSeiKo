<?php
class Tuvanmoigioi_detail_1 extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/tuvanmogioi/detail/tuvanmoigioi_1_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/tuvanmogioi/detail/tuvanmoigioi_1';
		$this->load->view('user/index', $this->data);
	}	
}