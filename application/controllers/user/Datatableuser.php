<?php
class Datatableuser extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/datatableUser/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/datatableUser/index';
		$this->load->view('user/index', $this->data);
	}	
}