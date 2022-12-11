<?php
class Camket extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/camket/camket_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/camket/camket';
		$this->load->view('user/index', $this->data);
	}	
}