<?php
class Giayphep extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/giayphep/giayphep_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/giayphep/giayphep';
		$this->load->view('user/index', $this->data);
	}	
}