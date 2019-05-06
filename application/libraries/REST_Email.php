<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class REST_Email extends CI_Email {
	public function __construct($config = array())
	{
		parent::__construct($config);
		// Your own constructor code
	}
	public function sendMail($details)
	{
		
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = 'nikengg@gmail.com';
		$config['smtp_pass'] = '$Nikaengg@1234#$';
		$config['smtp_port'] = 465;
		$config['mailtype'] = 'html';	
		$this->initialize($config);
		$this->clear();
		try{
			if ( ! function_exists('element'))
			{
				throw new Exception("Load array helper before email library. Use this->load->helper('array')");
			}
			$this->to(element('to', $details));
			$this->from('itsoftware05@abcdefghi.rvsolutions.in');
			$this->subject(element('subject', $details));
			$this->message(element('message', $details));
			if($this->send())
				return true;
			else
				throw new Exception("Mail configuration error. Please check your issue");
		}catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
			die();
		}
		
	}
}