<?php
class Nguyentac extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'user/gioithieu/nguyentac/nguyentac_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/nguyentac/nguyentac';
		$this->load->view('user/index', $this->data);
	}	
}