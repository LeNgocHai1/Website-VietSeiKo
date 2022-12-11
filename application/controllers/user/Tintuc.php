<?php
class Tintuc extends MY_Controller{
	
function __construct()
	{
		parent::__construct();
		$this->load->model('tintuc_model');
		// $this->load->model('admin_model');
		$this->load->helper('date');
    $this->load->model('hotline_model');
	}

	function index()
	{
		 $total = $this->tintuc_model->get_total();
            $this->data['total'] = $total;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $this->db->select('*');
        $this->db->from('tintuc');
        $this->db->order_by('id desc');
        
      //  $segment = $this->uri->segment(2);
      //  $limit = 5;
      //  $this->db->limit($limit,$segment);
        
        
        $config = array();
        $config['total_rows'] = $this->db->count_all('tintuc');//tong tat ca cac bài viết tren website
        $config['base_url']   = base_url() . '/tin-tuc/'; //link hien thi ra danh sach bài viết
        $config['per_page']   = 9;//so luong bài viết hien thi tren 1 trang
        $config['uri_segment'] = 2;//phan doan hien thi ra so trang tren url
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
		
	//	$input = array();
        $list = $this->tintuc_model->get_list($input);
      //  $this->data['list'] = $list;
    
        $total = $this->tintuc_model->get_total();
       // $this->data['total'] = $total;	
        $paginator = $this->pagination->create_links();
      //  $this->data['paginator'] = $this->pagination->create_links();
        $ndata=array(
            'paginator' => $paginator,
            'list'      => $list,
            'total'     => $total,
            'dulieu'    => "user/tintuc/index"
            );
        
        $this->data['title'] = 'user/tintuc/title';
        $this->load->view('admin/meta',$this->data);
        
		//$this->data['dulieu'] = 'user/tintuc/index';
		$this->load->view('user/index', $ndata);
	}

	function detail()
	{
		//lay id cua news can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua news
        $news_infor  = $this->tintuc_model->get_info($id);

        $this->data['news_infor'] = $news_infor;

        $this->data['title'] = 'user/tintuc/detail_title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'user/tintuc/detail';
		$this->load->view('user/index', $this->data);

	}
}