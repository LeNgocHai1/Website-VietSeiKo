<?php

/**
* 
*/
class Cal extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function index()
	{
		$this->data['dulieu'] = 'admin/calendar/index';
		$this->load->view('admin/main', $this->data);
	}
}