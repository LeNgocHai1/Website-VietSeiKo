<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Banner extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('banner_model');	
		$this->load->helper('date');	
		
	}

	function index()
	{
		$input = array();     
        
        $banner_list = $this->banner_model->get_list($input);
        $this->data['banner_list'] = $banner_list;


		$this->data['title'] = 'admin/banner/title';
        $this->load->view('admin/meta',$this->data);
		// $data = array();
		$this->data['dulieu'] = 'admin/banner/index';
		$this->load->view('admin/main', $this->data);
	}


	public function add()
	{
		
		$this->load->library('form_validation');
        $this->load->helper('form');

         if($this->input->post())
        {
        	$this->form_validation->set_rules('name', ' Tên hình ảnh', 'required');


        	if ($this->form_validation->run()) {
        		
        		$name = $this->input->post('name');

        		//lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './upload/banner';
                $upload_data = $this->upload_library->upload($upload_path, 'image');  
                $img_link = '';
                if(isset($upload_data['file_name']))
                {
                    $img_link = $upload_data['file_name'];
                }

                 //luu du lieu can them
                $data = array(
                    'name'      => $name,
                    'img_link'  =>$img_link,
                    'created'   => now(),
                );

                //them moi vao csdl
                if($this->banner_model->create($data))
                {
                     //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('banner'));

            }
        	
        }

		$this->data['title'] = 'admin/banner/title_add';
        $this->load->view('admin/meta',$this->data);
		// $data = array();
		$this->data['dulieu'] = 'admin/banner/add';
		$this->load->view('admin/main', $this->data);
	}

	public function edit()
	{
		
		//lay id cua news can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua news
        $banner_infor  = $this->banner_model->get_info($id);

        $this->data['banner_infor'] = $banner_infor;

         if($this->input->post())
        {
        	$this->form_validation->set_rules('name', ' Tên hình ảnh', 'required');


        	if ($this->form_validation->run()) {
        		
        		$name = $this->input->post('name');

        		//lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './upload/banner';
                $upload_data = $this->upload_library->upload($upload_path, 'image');  
                $img_link = '';
                if(isset($upload_data['file_name']))
                {
                    $img_link = $upload_data['file_name'];
                }

                 //luu du lieu can them
                $data = array(
                    'name'      => $name,
                    'img_link'=>$img_link,
                    'created' =>now(),
                );
                if($img_link != '')
                {
                    $data['img_link'] = $img_link;
                }
               
                //them moi vao csdl
                if($this->banner_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thất bại!');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('banner'));
            }
        	
        }
		$this->data['title'] = 'admin/banner/title_edit';
        $this->load->view('admin/meta',$this->data);
		// $data = array();
		$this->data['dulieu'] = 'admin/banner/edit';
		$this->load->view('admin/main', $this->data);
	}

	/*
     * Hàm xóa dữ liệu từng phần
     */
	function delete()
	{
		$id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $infor = $this->banner_model->get_info($id);
        if(!$infor)
        {
            $this->session->set_flashdata('message', 'Không tồn tại tin');
            redirect(admin_url('banner'));
        }
        //thuc hiện xóa
        $this->banner_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('banner'));
	}


}