<?php
class Congtacvien extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/congtacvien/congtacvien_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/congtacvien/congtacvien';
		$this->load->view('user/index', $this->data);
	}	
}