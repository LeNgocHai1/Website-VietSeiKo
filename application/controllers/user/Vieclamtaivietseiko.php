<?php
class Vieclamtaivietseiko extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("news_model");
		$this->load->model("tintuc_model");
		$this->load->library('pagination');

	}

	function index()
	{
		
		// $data=array();


		$input = array();
		$this->data['list'] = $this->news_model->get_list_vietseiko($input);
		$list = $this->data['list'];

		$input = array();
		$this->data['total'] = $this->news_model->get_total_vietseiko($input);
		$list = $this->data['total'];


		$input['limit'] = array('6' ,'0');
		$list_news = $this->tintuc_model->get_list($input);
		$this->data['list_news'] = $list_news;


        $this->data['title'] = 'user/vieclamgap/vieclamgap_title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'user/vieclamgap/vieclamgap';
		$this->load->view('user/index', $this->data);
	}

}