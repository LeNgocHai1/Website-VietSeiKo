<?php
	/**
	* 
	*/
	class QuyTrinh extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();

		}

		function index()
		{

			$this->data['title'] = 'user/common/ut-title';
	        $this->load->view('admin/meta',$this->data);

			$this->data['dulieu'] = 'user/common/quy-trinh-ung-tuyen';
			$this->load->view('user/index', $this->data);
		}
	}
?>