<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->admin_model();
	}

	function index()
	{
		
		$this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post())
        {
            $this->form_validation->set_rules('login' ,'login', 'callback_check_login');
            if($this->form_validation->run())
            {
                $this->session->set_userdata('login', true);
                
                redirect(admin_url('online'));
            }
        }
        $this->data['title'] = 'admin/login/title';
        $this->load->view('admin/meta',$this->data);

		$this->load->view('admin/login/index');
	}

	/*
     * Kiem tra username va password co chinh xac khong
     */
    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        
        $this->load->model('admin_model');
        $where = array('username' => $username , 'password' => $password);
        if($this->admin_model->check_exists($where))
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công tên đăng nhập hoặc mật khẩu không đúng ! ');
        return false;
    }

	


}