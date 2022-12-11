<?php
class Headhunter extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/headhunter/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/headhunter/index';
		$this->load->view('user/index', $this->data);
	}	
}