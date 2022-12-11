<?php
class Nhatuyendung extends MY_Controller{
	
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
			<p><b>city: </b>'.$mailData['city'].'</p>
			<p><b>field: </b>'.$mailData['field'].'</p>
            <p><b>number_people: </b>'.$mailData['number_people'].'</p>
            <p><b>your_name: </b>'.$mailData['your_name'].'</p>
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
        $this->data['title'] = 'user/nhatuyendung/nhatuyendung_title';
        $this->load->view('admin/meta', $this->data);

        $data1 = $formdata=array();
		if ($this->input->post('contactSubmit')){
		    $formdata=$this->input->post();
            $this->form_validation->set_rules('name','Tên công ty','required');
            $this->form_validation->set_rules('city','Tỉnh/thành phố','required');
            $this->form_validation->set_rules('number_people','Quy mô nhân sự','required');
            $this->form_validation->set_rules('your_name','Tên người liên hệ','required');
            $this->form_validation->set_rules('phone','Số điện thoại','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
		    $this->form_validation->set_rules('message','Nội dung','required');
		    
		    if ($this->form_validation->run()==true){
		        $maildata=array(
                'name' => $formdata['name'],
				'city'=> $formdata['city'],
				'field'=> $formdata['field'],
				'number_people'=> $formdata['number_people'],
				'your_name' => $formdata['your_name'],
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
		$this->data['dulieu'] = 'user/nhatuyendung/nhatuyendung.php';
		$this->load->view('user/index', $this->data,$data1);
		
		
	

	}	
	
}