<?
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
		$input = array();
        $list = $this->camnang_model->get_list($input);
        $this->data['list'] = $list;
    
        $total_camnang = $this->camnang_model->get_total();
        $this->data['total_camnang'] = $total_camnang;	
		// $data=array();
        $this->data['title'] = 'admin/camnang/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'admin/camnang/index';
		$this->load->view('admin/main',$this->data); 
	}

	public function detail($url_slug){
        $data = array();
        
        //get the post data
        $data['dulieu'] = $this->post->getRows(array('url_slug'=>$url_slug));
        
        //load the view
        $this->data['dulieu'] = 'admin/camnang/detail';
        $this->load->view('admin/main',$this->$data);
    }

	function add()
	{
		
		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
        	$this->form_validation->set_rules('name', 'Tiêu đề', 'required');

        	 if($this->form_validation->run())
        	 {
        	 	$name     = $this->input->post('name');
        	 	$content  = $this->input->post('content');        	 	

        	 	$data = array(
        	 		'name' => $name,
        	 		'content' => $content,
                    'created' => now(),
        	 	);
        	 	/*
                 * Generate SEO friendly URL
                 */
                              

        	 	if($this->camnang_model->create($data)){
        	 		echo 'Thêm thành công!!!';
        	 		redirect(admin_url('camnang'));
        	 	}else echo 'Thêm không thành công !!!';
        	 }        	
        }

		$this->data['title'] = 'admin/camnang/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'admin/camnang/add';
		$this->load->view('admin/main',$this->data);
	}

    
}