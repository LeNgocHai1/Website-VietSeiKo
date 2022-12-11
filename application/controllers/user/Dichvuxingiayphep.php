<?php
class Dichvuxingiayphep extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/dichvuxingiayphep/dichvuxingiayphep_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/dichvuxingiayphep/dichvuxingiayphep';
		$this->load->view('user/index', $this->data);
	}	
}