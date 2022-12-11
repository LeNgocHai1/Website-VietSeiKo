<?php
class Giayphepkinhdoanh extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/giayphepkinhdoanh/giayphepkinhdoanh_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/giayphepkinhdoanh/giayphepkinhdoanh';
		$this->load->view('user/index', $this->data);
	}	
}