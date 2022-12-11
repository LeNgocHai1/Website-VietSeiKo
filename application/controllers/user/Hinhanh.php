<?php
class Hinhanh extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/hinhanh/hinhanh_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/hinhanh/hinhanh';
		$this->load->view('user/index', $this->data);
	}	
}



