<?php
class Giatri extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/giatri/giatri_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/giatri/giatri';
		$this->load->view('user/index', $this->data);
	}	
}