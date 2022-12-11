<?php
class Tuvangioithieu extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/tuvangioithieu/tuvangioithieu_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/tuvangioithieu/tuvangioithieu';
		$this->load->view('user/index', $this->data);
	}	
}