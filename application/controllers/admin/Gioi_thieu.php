<?
/**
* 
*/
class Gioi_thieu extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('gioi_thieu_model');
	} 

	function index()
	{
		$input = array();
        $list = $this->gioi_thieu_model->get_list($input);
        $this->data['list'] = $list;
    
        $total_gioithieu = $this->gioi_thieu_model->get_total();
        $this->data['total_gioithieu'] = $total_gioithieu;	
		// $data=array();
        $this->data['title'] = 'admin/gioithieu/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'admin/gioithieu/index';
		$this->load->view('admin/main',$this->data); 
	}

	public function detail($url_slug){
        $data = array();
        
        //get the post data
        $data['dulieu'] = $this->post->getRows(array('url_slug'=>$url_slug));
        
        //load the view
        $this->data['dulieu'] = 'admin/gioithieu/detail';
        $this->load->view('admin/main',$this->$data);
    }

	function add()
	{
		
		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
        	$this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        	 if($this->form_validation->run())
        	 {
        	 	$title     = $this->input->post('title');
        	 	$content  = $this->input->post('content');        	 	

        	 	$data = array(
        	 		'title' => $title,
        	 		'content' => $content,
                    'created' => now(),
        	 	);
        	 	/*
                 * Generate SEO friendly URL
                 */
                              

        	 	if($this->gioi_thieu_model->create($data)){
        	 		echo 'Thêm thành công!!!';
        	 		redirect(admin_url('gioi_thieu'));
        	 	}else echo 'Thêm không thành công !!!';
        	 }        	
        }

		$this->data['title'] = 'admin/gioithieu/title';
        $this->load->view('admin/meta', $this->data);

		$this->data['dulieu'] = 'admin/gioithieu/add';
		$this->load->view('admin/main',$this->data);
	}

    function edit()
    {
         //lay id cua news can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua news
        $gioithieu_infor  = $this->gioi_thieu_model->get_info($id);

        $this->data['customer_infor'] = $gioithieu_infor;


        $this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

             if($this->form_validation->run())
             {
                $title     = $this->input->post('title');
                $content  = $this->input->post('content');              

                $data = array(
                    'title' => $title,
                    'content' => $content,
                    'created' => now(),
                );
                /*
                 * Generate SEO friendly URL
                 */
                              

                if($this->gioi_thieu_model->update($data)){
                    echo 'Thêm thành công!!!';
                    redirect(admin_url('gioi_thieu'));
                }else echo 'Thêm không thành công !!!';
             }          
        }

        $this->data['title'] = 'admin/gioithieu/title';
        $this->load->view('admin/meta', $this->data);

        $this->data['dulieu'] = 'admin/gioithieu/edit';
        $this->load->view('admin/main',$this->data);
    }

    
}