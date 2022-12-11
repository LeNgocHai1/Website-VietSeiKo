<?php
class Tuvanbatdongsan extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/tuvanbatdongsan/tuvanbatdongsan_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/tuvanbatdongsan/tuvanbatdongsan';
		$this->load->view('user/index', $this->data);
	}	
}