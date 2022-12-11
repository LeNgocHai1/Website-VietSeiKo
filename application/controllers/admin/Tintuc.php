<?php 

/**
* 
*/
class News extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		// $this->load->model('admin_model');
	}

	function index()
	{
		$input = array();     
        
        $list = $this->news_model->get_list($input);
        $this->data['list'] = $list;
    
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
	

        $this->data['title'] = 'admin/news/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/news/index';
		$this->load->view('admin/main', $this->data);
	}

	function add ()
	{

		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
        	$this->form_validation->set_rules('nameNews', 'Chức danh', 'required|min_length[3]');
        	$this->form_validation->set_rules('code', 'Mã công việc ', 'required|min_length[3]');
        	$this->form_validation->set_rules('nameNews_flug', 'SEO tên', 'required');
        	$this->form_validation->set_rules('infoCPN', 'Thông tin công ty', 'required|min_length[3]');
        	$this->form_validation->set_rules('staffNumber', 'Số nhân viên', 'required|min_length[1]');
        	$this->form_validation->set_rules('jobs', 'Ngành nghề', 'required|min_length[3]');
        	$this->form_validation->set_rules('address', 'Địa điểm làm việc', 'required|min_length[3]');
        	$this->form_validation->set_rules('salary', 'Mức lượng', 'required');
        	$this->form_validation->set_rules('descr_1', ' Mô tả thêm công việc', 'required');
        	$this->form_validation->set_rules('descr_2', ' Mô tả kỹ năng', 'required');
        	$this->form_validation->set_rules('languages', ' Ngôn ngữ', 'required');
        	$this->form_validation->set_rules('ctuyen', ' Cách tuyển', 'required');
        	$this->form_validation->set_rules('manager', ' Người phụ trách', 'required');
        	$this->form_validation->set_rules('phone', ' Số điện thoại', 'required|min_length[10]');
        	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        	$this->form_validation->set_rules('req', ' Yêu cầu gửi hồ sơ', 'required');
        	$this->form_validation->set_rules('receipt', ' Hạn nhận hồ sơ', 'required');
        	//nhập liệu chính xác
            if($this->form_validation->run())
            { 
            	// thêm vào csdl
            	$nameNews = $this->input->post('nameNews');
            	$nameNews_flug  = $this->input->post('nameNews_flug');
            	$code 			= $this->input->post('code');
            	$infoCPN		= $this->input->post('infoCPN');
            	$staffNumber	= $this->input->post('staffNumber');
            	$address			= $this->input->post('address');        
                $jobs           = $this->input->post('jobs');
            	$salary			= $this->input->post('salary');
            	$descr_1		= $this->input->post('descr_1');
            	$descr_2		= $this->input->post('descr_2');
            	$languages		= $this->input->post('languages');
            	$ctuyen			= $this->input->post('ctuyen');
            	$manager		= $this->input->post('manager');
            	$phone			= $this->input->post('phone');
            	$email			= $this->input->post('email');
            	$req			= $this->input->post('req');
            	$receipt		= $this->input->post('receipt');



            	$data = array 
            	(
            		'nameNews'        => $nameNews,
            		'nameNews_flug'   => $nameNews_flug,
            		'code'            => $code,
            		'infoCPN'         => $infoCPN,
            		'staffNumber'     => $staffNumber,
                    'address'         => $address,
            		'jobs'            => $jobs,
            		'salary'          => $salary,
            		'descr_1'         => $descr_1,
            		'descr_2'         => $descr_2,
            		'languages'       => $languages,
            		'ctuyen'          => $ctuyen,
            		'manager'         => $manager,
            		'phone'           => $phone,
            		'email'           => $email,
            		'req'             => $req,
            		'receipt'         => $receipt,
                    'created'         => date('Y\-m\-d\ H:i:s A'),		

            	);
            	if($this->news_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                    
                    redirect(admin_url('news'));
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                   
                }
            }
            redirect(admin_url('news'));


        }

		$this->data['title'] = 'admin/news/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/news/add';
		$this->load->view('admin/main', $this->data);
	}

	function edit()
	{
		//lay id cua news can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua news
        $infor  = $this->news_model->get_info($id);

        $this->data['infor'] = $infor;
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('nameNews', 'Chức danh', 'required|min_length[3]');
            $this->form_validation->set_rules('code', 'Mã công việc ', 'required|min_length[3]');
            $this->form_validation->set_rules('nameNews_flug', 'SEO tên', 'required');
            $this->form_validation->set_rules('infoCPN', 'Thông tin công ty', 'required|min_length[3]');
            $this->form_validation->set_rules('staffNumber', 'Số nhân viên', 'required|min_length[1]');
            $this->form_validation->set_rules('jobs', 'Ngành nghề', 'required|min_length[3]');
            $this->form_validation->set_rules('address', 'Địa điểm làm việc', 'required|min_length[3]');
            $this->form_validation->set_rules('salary', 'Mức lượng', 'required');
            $this->form_validation->set_rules('descr_1', ' Mô tả thêm công việc', 'required');
            $this->form_validation->set_rules('descr_2', ' Mô tả kỹ năng', 'required');
            $this->form_validation->set_rules('languages', ' Ngôn ngữ', 'required');
            $this->form_validation->set_rules('ctuyen', ' Cách tuyển', 'required');
            $this->form_validation->set_rules('manager', ' Người phụ trách', 'required');
            $this->form_validation->set_rules('phone', ' Số điện thoại', 'required|min_length[10]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('req', ' Yêu cầu gửi hồ sơ', 'required');
            $this->form_validation->set_rules('receipt', ' Hạn nhận hồ sơ', 'required');
            //nhập liệu chính xác
            if($this->form_validation->run())
            { 
                // thêm vào csdl
                $nameNews = $this->input->post('nameNews');
                $nameNews_flug  = $this->input->post('nameNews_flug');
                $code           = $this->input->post('code');
                $infoCPN        = $this->input->post('infoCPN');
                $staffNumber    = $this->input->post('staffNumber');
                $address            = $this->input->post('address');        
                $jobs           = $this->input->post('jobs');
                $salary         = $this->input->post('salary');
                $descr_1        = $this->input->post('descr_1');
                $descr_2        = $this->input->post('descr_2');
                $languages      = $this->input->post('languages');
                $ctuyen         = $this->input->post('ctuyen');
                $manager        = $this->input->post('manager');
                $phone          = $this->input->post('phone');
                $email          = $this->input->post('email');
                $req            = $this->input->post('req');
                $receipt        = $this->input->post('receipt');

                $data = array
                (
                    'nameNews'        => $nameNews,
                    'nameNews_flug'   => $nameNews_flug,
                    'code'            => $code,
                    'infoCPN'         => $infoCPN,
                    'staffNumber'     => $staffNumber,
                    'address'         => $address,
                    'jobs'            => $jobs,
                    'salary'          => $salary,
                    'descr_1'         => $descr_1,
                    'descr_2'         => $descr_2,
                    'languages'       => $languages,
                    'ctuyen'          => $ctuyen,
                    'manager'         => $manager,
                    'phone'           => $phone,
                    'email'           => $email,
                    'req'             => $req,
                    'receipt'         => $receipt,
                    'created'         => now(),            

                );
                if($this->news_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    // $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                    echo 'Thêm mới thành công';
                    redirect(admin_url('news'));
                }else{
                    // $this->session->set_flashdata('message', 'Không thêm được');
                    echo 'Thêm mới không thành công';
                }
            }
            // redirect(admin_url('news'));


        }

        $this->data['title'] = 'admin/news/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/news/edit';
		$this->load->view('admin/main', $this->data);
	}

	/*
     * Hàm xóa nhiều tài khoản
     */
	function delete_all()
	{
		$ids = $this->input->post('ids');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
	}


	/*
     * Hàm xóa dữ liệu từng phần
     */
	function delete()
	{
		$id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $infor = $this->news_model->get_info($id);
        if(!$infor)
        {
            $this->session->set_flashdata('message', 'Không tồn tại tin');
            redirect(admin_url('news'));
        }
        //thuc hiện xóa
        $this->news_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('news'));
	}

}