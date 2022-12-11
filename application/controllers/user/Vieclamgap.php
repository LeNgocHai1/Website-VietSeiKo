<?php
class Vieclamgap extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model("news_model");
		$this->load->model("tintuc_model");

	}

	function index()
	{
		$total = $this->news_model->get_total();
        $this->data['total'] = $total;

		$this->load->library('pagination');
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('code = %VN%');
        $this->db->order_by('id desc');

        $config = array();
        $config['total_rows'] = $this->db->count_all('news');
        $config['base_url']   = base_url() . '/viec-lam-gap/';
        $config['per_page']   = 5;
        $config['uri_segment'] = 2;
        $config['next_link']   = '&lt';
        $config['prev_link']   = '&gt';
        $config['last_link'] = 'Cuối';
        $config['first_link'] = 'Đầu';

		//khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(2);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);

        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $input['where'] = array();
        if($id > 0)
        {
            $input['where']['id'] = $id;
        }
        $name = $this->input->get('name');
        if($name)
        {
            $input['like'] = array('name', $name);
        }

		$total = $this->news_model->get_total();

		$list = $this->news_model->get_list($input);

		$paginator = $this->pagination->create_links();

		$ndata=array(
            'paginator' => $paginator,
            'list'      => $list,
            'total'     => $total,
            'dulieu'    => "user/vieclamgap/vieclamgap"
            );



		$input['limit'] = array('6' ,'0');
		$list_news = $this->tintuc_model->get_list($input);
		$this->data['list_news'] = $list_news;

        $this->data['title'] = 'user/vieclamgap/vieclamgap_title';
        $this->load->view('admin/meta', $this->data);

		$this->load->view('user/index', $ndata);
	}	
}