
<?php
class Vieclamtaivietnam extends MY_Controller{
	
function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		// $this->load->model('admin_model');
		 $this->load->helper('date');
        $this->load->model('hotline_model');
	}

	function index()
	{
		 $total = $this->news_model->get_total();
            $this->data['total'] = $total;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total'] = $total;//tong tat ca cac bài viết tren website
        $config['base_url']   = admin_url('news/index'); //link hien thi ra danh sach bài viết
        $config['per_page']   = 5;//so luong bài viết hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
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
		
		$input = array();
        $list = $this->news_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->news_model->get_total();
        $this->data['total'] = $total;	

        $this->data['title'] = 'user/vieclamtaivietnam/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'user/vieclamtaivietnam/index';
		$this->load->view('user/index_vieclamtainhat', $this->data);
	}

	function detail()
	{
		//lay id cua news can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua news
        $news_infor  = $this->news_model->get_info($id);

        $this->data['news_infor'] = $news_infor;

        $this->data['title'] = 'user/news/detail_title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'user/news/detail';
		$this->load->view('user/index', $this->data);

	}
}