<?php 

class Sodotochuc extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['title'] = 'user/gioithieu/sodotochuc/title';
		$this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/gioithieu/sodotochuc/index';
		$this->load->view('user/index', $this->data);
	}
}