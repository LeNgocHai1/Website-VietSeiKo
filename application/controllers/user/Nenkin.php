<?php
class Nenkin extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/common/nenkin_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/common/nenkin';
		$this->load->view('user/index', $this->data);
	}	
}