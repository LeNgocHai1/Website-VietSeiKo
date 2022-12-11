<?php 
/**
* 
*/
class Hotline extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('hotline_model');
		
	}

	function index() 
	{
		
		
        $input = array();
        $list = $this->hotline_model->get_list($input);
        $this->data['list'] = $list;

        
        	
        $this->data['title'] = 'admin/hotline/title';
        $this->load->view('admin/meta',$this->data);
		
		$this->data['dulieu'] = 'admin/hotline/index';
		$this->load->view('admin/main', $this->data);
	}

	function edit()
	{
		 $input = array();
        $list = $this->hotline_model->get_list($input);
        $this->data['list'] = $list;    

        //lay id cua quan tri vien can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua quan trị viên
        $info  = $this->hotline_model->get_info($id);

        $this->data['info'] = $info;
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên Công Ty', 'required|min_length[3]');
            $this->form_validation->set_rules('phone', ' Số điện thoại', 'required|min_length[10]');        
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            // $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $phone    = $this->input->post('phone');
                $address  = $this->input->post('address');
                $email    = $this->input->post('email');
                
                $data = array(                    
                    'name'     => $name, 
                    'phone' => $phone,                   
                    'address' => $address,
                    'email'=> $email
                );
               
                if($this->hotline_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    // $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                    echo 'Lưu thành công';
                    redirect(admin_url('hotline'));
                }else{
                    // $this->session->set_flashdata('message', 'Không thêm được');
                    echo 'Lưu không thành công';
                }
                //chuyen tới trang danh sách 
                // redirect(admin_url('hotline'));
            }
        }
        $this->data['title'] = 'admin/hotline/title';
        $this->load->view('admin/meta',$this->data);

        $this->data['dulieu'] = 'admin/hotline/edit'; 
        $this->load->view('admin/main', $this->data);
	}

	
}
