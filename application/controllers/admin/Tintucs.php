<?php 

/**
* 
*/
class Tintucs extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('tintuc_model');
		// $this->load->model('admin_model');
	}

	function index()
	{
		$input = array();     
        
        $list = $this->tintuc_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->tintuc_model->get_total();
        $this->data['total'] = $total;

        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total'] = $total;//tong tat ca cac bài viết tren website
        $config['base_url']   = admin_url('tintuc/index'); //link hien thi ra danh sach bài viết
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
	

        $this->data['title'] = 'admin/tintuc/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/tintuc/index';
		$this->load->view('admin/main', $this->data);
	}

	function add ()
	{

		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
        	$this->form_validation->set_rules('nameNews', 'Tiêu đề');
            $this->form_validation->set_rules('descr_1', ' Nội dung', 'required');
            $this->form_validation->set_rules('descr_2', ' Mô tả', 'required');
            $this->form_validation->set_rules('date', 'Ngày đăng' );
            $this->form_validation->set_rules('picture', 'Hình ảnh', 'required');

        	//nhập liệu chính xác
            if($this->form_validation->run())
            { 
            	// thêm vào csdl
                $tieude = $this->input->post('nameNews') ;
                $noidung = $this->input->post('descr_1');
                $mota = $this->input->post('descr_2');
                $ngaydang = $this->input->post('date');
                $hinhanh = $this->input->post('picture');
            	$data = array 
            	(
                    'tieude'            => $tieude,
                    'noidung'           => $noidung,
                    'mota'              => $mota,
                    'hinhanh'           => $hinhanh,
                    'ngaydang'          => $ngaydang
            	);
            	if($this->tintuc_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');         
                    redirect(admin_url('tintucs'));

                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                    redirect(admin_url('tintucs/add'));
                    echo "Thêm mới dữ liệu không thành công";
                }
            }


        }

		$this->data['title'] = 'admin/tintuc/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/tintuc/add';
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
                    
        $infor  = $this->tintuc_model->get_info($id);

        $this->data['infor'] = $infor;

       
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {        

            $this->form_validation->set_rules('nameNews', 'Tiêu đề');
            $this->form_validation->set_rules('descr_1', ' Nội dung', 'required');
            $this->form_validation->set_rules('descr_2', ' Mô tả', 'required');
            $this->form_validation->set_rules('date', 'Ngày đăng' );
            $this->form_validation->set_rules('picture', 'Hình ảnh', 'required');

            //nhập liệu chính xác
            if($this->form_validation->run())
            { 
                $tieude = $this->input->post('nameNews') ;
                $noidung = $this->input->post('descr_1');
                $mota = $this->input->post('descr_2');
                $ngaydang = $this->input->post('date');
                $hinhanh = $this->input->post('picture');
                $data = array 
                (
                    'tieude'            => $tieude,
                    'noidung'           => $noidung,
                    'mota'              => $mota,
                    'ngaydang'          => $ngaydang,
                    'hinhanh'           => $hinhanh  
                );
             
                // thêm vào csdl
               
                if($this->tintuc_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    // $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                    echo 'Chinh sửa thành công';
                    redirect(admin_url('tintucs'));
                }else{
                    // $this->session->set_flashdata('message', 'Không thêm được');
                    echo 'Chỉnh sửa không thành công';
                }
            }
            // redirect(admin_url('news'))

        }

        $this->data['title'] = 'admin/tintuc/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/tintuc/edit';
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
        $infor = $this->tintuc_model->get_info($id);
        if(!$infor)
        {
            $this->session->set_flashdata('message', 'Không tồn tại tin');
            redirect(admin_url('news'));
        }
        //thuc hiện xóa
        $this->tintuc_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('tintucs'));
	}

}