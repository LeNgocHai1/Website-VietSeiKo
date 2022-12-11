<?php
class Gioithieukysu extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/linhvuchd/gioithieukysu/gioithieukysu_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/linhvuchd/gioithieukysu/gioithieukysu';
		$this->load->view('user/index', $this->data);
	}	
}