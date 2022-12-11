<?php 

/**
* 
*/
class Customer extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
        // $this->load->model('admin_model');
      
    }

    function index()
    {
        $input = array();
        $list = $this->customer_model->get_list($input);
        $this->data['list'] = $list;
    
        $total_customer = $this->customer_model->get_total();
        $this->data['total_customer'] = $total_customer;    
        // $data=array();
        
        $this->data['title'] = 'user/customer/title';
        $this->load->view('admin/meta',$this->data);

        $this->data['dulieu'] = 'user/customer/index';
        $this->load->view('user/index',$this->data);
    }

    function add ()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Họ và Tên', 'required|min_length[3]');
                  
            $this->form_validation->set_rules('pass', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('re_pass','Nhập lại mật khẩu',
                'required|matches[pass]');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
             //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //Add database
                $name           = $this->input->post('name');
                $age            = $this->input->post('age');
                $phone            = $this->input->post('phone');
                $pass       = $this->input->post('pass');
                $email          = $this->input->post('email');
                // $gender         = $this->input->post('gender');
                // $address        = $this->input->post('address');
                // $address_jobs   = $this->input->post('address_jobs');
                // $languages      = $this->input->post('languages');
                // $jobs           = $this->input->post('jobs');
                //lay ten file anh minh hoa duoc update len
                // $this->load->library('upload_library');
                // $upload_path = './upload/customer';               
                
                $data = array(
                    
                    'name'         => $name, 
                    'age'          => $age,
                    'phone'        => $phone,           
                    'pass'         => md5($pass),
                    'email'        => $email,
                    // 'gender'       => $gender,
                    // 'address'      => $address,
                    // 'address_jobs' => $address_jobs,
                    // 'languages'    => $languages,
                    // 'jobs'         => $jobs,
                    // 'cv'           => $cv,
                    'created'         => now(),
                );
               
                if($this->customer_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                    redirect(base_url());
                     
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                    
                }
                //chuyen tới trang danh sách quản trị viên
               
        }
    }
        
        $this->data['title'] = 'user/customer/title';
        $this->load->view('admin/meta',$this->data);

        $this->data['dulieu'] = 'user/customer/index';
        $this->load->view('user/index',$this->data);
    }

    function edit()
    {
        //lay id cua customer can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua customer
        $customer_infor  = $this->customer_model->get_info($id);

        $this->data['customer_infor'] = $customer_infor;

        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Họ và Tên', 'required|min_length[3]');                  
           
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
             //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //Add database
                $name           = $this->input->post('name');
                $age            = $this->input->post('age');
                $phone            = $this->input->post('phone');
                // $password       = $this->input->post('password');
                $email          = $this->input->post('email');
                $gender         = $this->input->post('gender');
                $address        = $this->input->post('address');
                $address_jobs   = $this->input->post('address_jobs');
                // $languages      = $this->input->post('languages');
                $jobs           = $this->input->post('jobs');
                //lay ten file anh minh hoa duoc update len
                // $this->load->library('upload_library');
                // $upload_path = './upload/customer';            

                $data = array(
                    
                    'name'         => $name, 
                    'age'          => $age, 
                    'phone'        => $phone,                  
                    // 'password'     => md5($password),
                    'email'        => $email,
                    'gender'       => $gender,
                    'address'      => $address,
                    'address_jobs' => $address_jobs,
                    // 'languages'    => $languages,
                    'jobs'         => $jobs,
                    // 'cv'           => $cv,
                    'created'         => now()
                );
               
                if($this->customer_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    // $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                    echo 'Edit thành công';
                    redirect(admin_url('customer'));
                }else{
                    // $this->session->set_flashdata('message', 'Không thêm được');
                    echo 'Edit không thành công';
                }
                //chuyen tới trang danh sách quản trị ứng viên
                
            }
        }

        $this->data['title'] = 'admin/customer/title';
        $this->load->view('admin/meta',$this->data);

        $this->data['dulieu'] = 'admin/customer/edit';
        $this->load->view('admin/main',$this->data);
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
            $this->session->set_flashdata('message', 'Không tồn tại tin');
            redirect(admin_url('customer'));
        }
        //thuc hiện xóa
        $this->admin_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('customer'));
    }

}




