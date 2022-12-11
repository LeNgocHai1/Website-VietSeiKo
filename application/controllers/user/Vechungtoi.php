<?php
class Vechungtoi extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/vechungtoi/vechungtoi_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/vechungtoi/vechungtoi';
		$this->load->view('user/index', $this->data);
	}	
}