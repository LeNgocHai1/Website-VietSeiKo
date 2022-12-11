<?php
class Tamnhin extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/tamnhin/tamnhin_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/tamnhin/tamnhin';
		$this->load->view('user/index', $this->data);
	}	
}