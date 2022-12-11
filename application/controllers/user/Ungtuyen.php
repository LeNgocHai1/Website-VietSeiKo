<?php
class Ungtuyen extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		//load form validation library
		$this->load->library('form_validation');
		
	}
    function sendEmail($mailData){
        $this->load->library('email');
        
        // Mail config
        $to = 'contact@vietseiko.com';
        $from = 'kubo@vietseiko.com';
        $fromName = 'kubo';
        $mailSubject = 'Contact Request Submitted by '.$mailData['name'];
        
        // Mail content
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
			<p><b>city: </b>'.$mailData['Donhang'].'</p>
            <p><b>phone: </b>'.$mailData['phone'].'</p>
            <p><b>email: </b>'.$mailData['email'].'</p>
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
	    		// $data=array();
        $this->data['title'] = 'user/ungtuyen/ungtuyen_title';
        $this->load->view('admin/meta', $this->data);

        $data1 = $formdata=array();
		if ($this->input->post('contactSubmit')){
		    $formdata=$this->input->post();
            $this->form_validation->set_rules('name','Họ và tên','required');
            // $this->form_validation->set_rules('Donhang','Tỉnh/thành phố','required');
            $this->form_validation->set_rules('phone','Số điện thoại','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
		    $this->form_validation->set_rules('message','Nội dung','required');
		    
		    if ($this->form_validation->run()==true){
		        $maildata=array(
                'name' => $formdata['name'],
				'Donhang'=> $formdata['Donhang'],
				'phone' => $formdata['phone'],
                'email' => $formdata['email'],
		        'message'=> $formdata['message']
		        );
    		    
    		    $send=$this->sendEmail($maildata);
    		    if($send){
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
		$this->data['dulieu'] = 'user/ungtuyen/ungtuyen.php';
		$this->load->view('user/index', $this->data,$data1);
		
		
	

	}	
	
}