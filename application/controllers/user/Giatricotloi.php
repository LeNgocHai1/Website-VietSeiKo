<?php
class Giatricotloi extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/giatricotloi/giatricotloi_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/giatricotloi/giatricotloi';
		$this->load->view('user/index', $this->data);
	}	
}