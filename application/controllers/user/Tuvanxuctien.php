<?php
class Tuvanxuctien extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/tuvanxuctien/tuvanxuctien_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/tuvanxuctien/tuvanxuctien';
		$this->load->view('user/index', $this->data);
	}	
}