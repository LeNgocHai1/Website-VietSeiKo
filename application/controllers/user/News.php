<?php
class News extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		// $this->load->model('admin_model');
		 $this->load->helper('date');
        $this->load->model('hotline_model');
        $this->load->helper('security');
	}
    function sendEmail($mailData){
        $this->load->library('email');
        
        // Mail config
        $to = 'contact@vietseiko.com';
        $from = 'kubo@vietseiko.com';
        $fromName = 'Ứng viên ứng tuyển vị trí';
        $mailSubject = 'Ứng tuyển vị trí từ '.$mailData['name'];
        
        // Mail content
        $mailContent = '
            <h2>Ứng viên ứng tuyển vị trí</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
            <p><b>Phone: </b>'.$mailData['phone'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Subject: </b>'.$mailData['address'].'</p>
            <p><b>Message: </b>'.$mailData['message'].'</p>
        ';
            
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        
        // Send email & return status
        return $this->email->send()?true:false;
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
        $this->data['links'] =  $this->pagination->create_links();
        
        $total = $this->news_model->get_total();
        $this->data['total'] = $total;	

        $this->data['title'] = 'user/news/title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'user/news/index';
		$this->load->view('user/index', $this->data);
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

        // send email
        $data1 = $formdata=array();
        if ($this->input->post('contactSubmit')){
            $formdata=$this->input->post();
            $this->form_validation->set_rules('name','Họ và tên','required');
            $this->form_validation->set_rules('phone','Số điện thoại','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('message','Nội dung','required');
            $this->form_validation->set_rules('address','Địa chỉ','required');
            if ($this->form_validation->run()==true){
                $maildata=array(
                'name' => $formdata['name'],
                'phone'=> $formdata['phone'],
                'email'=> $formdata['email'],
                'address'=> $formdata['address'],
                'message'=> $formdata['message']
                );
                
                $send=$this->sendEmail($maildata);
                if($send){
                    echo "win";
                    $formdata=array();
                    $data1['status']=array(
                        'type' => 'successfull',
                        'msg'=>'Your contact request has been submitted successfully'
                    );
                }else{
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again. ');
                }
            }
        }
        $data1['postdata'] = $formdata;

        $this->data['title'] = 'user/news/detail_title';
        $this->load->view('admin/meta',$this->data);

		$this->data['dulieu'] = 'user/news/detail';
		$this->load->view('user/index', $this->data,$data1);

	}

    function sendEmail_detail()
    {
        $this->form_validation->set_rules('name','Họ và tên','trim|required|xss_clean');
        $this->form_validation->set_rules('phone','Số điện thoại','trim|required|xss_clean');
        $this->form_validation->set_rules('email','Địa chỉ email','trim|required|valid_email');
        $this->form_validation->set_rules('address','Chổ','trim|required|xss_clean');
        $this->form_validation->set_rules('message','Message','trim|required|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            # code...
            echo validation_errors();
        }
        else{

            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $message = $this->input->post('message');
            
         
            $this->load->library('email');
        
        // Mail config
            $to = 'contact@vietseiko.com';
            $from = 'kubo@vietseiko.com';
            $fromName = 'VietSeiKo_Hr';
            $mailSubject = 'Contact Request Submitted by '.$name;
            
            // Mail content
            $mailContent = '
                <h2>Contact Request Submitted</h2>
                <p><b>Name: </b>'.$name.'</p>
                <p><b>Phone: </b>'.$phone.'</p>
                <p><b>Email: </b>'.$from_email.'</p>
                <p><b>Address: </b>'.$address.'</p>
                <p><b>Message: </b>'.$message.'</p>
            ';
                
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->to($to);
            $this->email->from($from, $fromName);
            $this->email->subject($mailSubject);
            $this->email->message($mailContent);

            if ($this->email->send())
            {
                // mail sent
                echo "YES";
            }
            else
            {
                //error
                echo "NO";
            }

        }
    }
}