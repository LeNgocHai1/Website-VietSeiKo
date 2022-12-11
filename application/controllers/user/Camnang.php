<?php
/**
* 
*/
class Camnang extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('camnang_model');
	}

	function index()
	{
		
		// $data=array();
        $this->data['title'] = 'admin/camnang/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'admin/camnang/index';
		$this->load->view('admin/main',$this->data); 
	}


	function add()
	{

	}
}