<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->admin_model();
		$this->load->model('admin_model');
        $this->load->helper('date');		
		$this->data['title'] = 'admin/admin/title';
        $this->load->view('admin/meta',$this->data);
	}

	function index()
	{
		$input = array();
        $list = $this->admin_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->admin_model->get_total();
        $this->data['total'] = $total;	

        $this->data['title'] = 'admin/admin/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'admin/admin/index';
		$this->load->view('admin/main', $this->data);
	}


	function add()
	{
		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
           
            $this->form_validation->set_rules('name', 'Họ và Tên', 'required|min_length[3]');
            $this->form_validation->set_rules('username', 'Tài khoản', 'required|min_length[3]');        
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[10]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                
                $data = array(
                    
                    'name'     => $name, 
                    'username' => $username,                   
                    'password' => md5($password),
                    'email'=> $email,
                    'phone' => $phone
                );
               
                if($this->admin_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới thành công');
                    // echo 'Thêm mới thành công';
                    redirect(admin_url('admin'));
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                    // echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
                
            }
        }

		$this->data['dulieu'] = 'admin/admin/add'; 
		$this->load->view('admin/main', $this->data);
	}

	function edit()
	{
        //lay id cua quan tri vien can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua quan trị viên
        $infor  = $this->admin_model->get_info($id);

        $this->data['infor'] = $infor;
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Họ và Tên', 'required|min_length[3]');
            $this->form_validation->set_rules('username', 'Tài khoản', 'required|min_length[3]');        
            // $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            // $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone',' Số điện thoại','required|min_length[10]');
            $this->form_validation->set_rules('address','Địa chỉ','required');
            $this->form_validation->set_rules('gender','Giới tính','required');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $gender = $this->input->post('gender');
                
                $data = array(
                    
                    'name'     => $name, 
                    'username' => $username,                   
                    'password' => md5($password),
                    'phone'  => $phone,
                    'address' =>$address,
                    'email'=> $email,
                    'gender' => $gender
                );
               
                if($this->admin_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công!');
                    echo 'Thêm mới thành công';
                    redirect(admin_url('admin'));
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật không thành công!');
                    echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
               
            }
        }

        $this->data['dulieu'] = 'admin/admin/edit'; 
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
        $info = $this->admin_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
            redirect(admin_url('admin'));
        }
        //thuc hiện xóa
        $this->admin_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('admin'));
	}

	// Trang ca nhan

    function pro()
    {
        $input = array();
        $list = $this->admin_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->admin_model->get_total();
        $this->data['total'] = $total;  

        $this->data['title'] = 'admin/admin/title';
        $this->load->view('admin/meta',$this->data);

        $this->data['dulieu'] = 'admin/admin/pro';
        $this->load->view('admin/main', $this->data);
    }

}