<?php 

/**
* 
*/
class Category extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->category_model();
	}

	function index()
	{
		// Display title

		$this->data['title'] = 'admin/category/title';
        $this->load->view('admin/meta',$this->data);

        //Display teample

		$this->data['dulieu'] = 'admin/category/index';
		$this->load->view('admin/main',$this->data);
	}

	function create ()
	{

	}

	function update()
	{

	}

	

}