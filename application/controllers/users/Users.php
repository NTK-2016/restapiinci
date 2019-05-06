<?php
use Restserver\Libraries\REST_Controller;
require  APPPATH.'libraries/REST_Controller.php';
 
     class Users extends REST_Controller {
	
	   function __construct()
	{
        parent::__construct();
        $this->load->model('Userdata');
    }
	/**
	 * USER POST API
	 * @METHOD :POST
	 *  */ 
	
	
	 public function add_user_post()
	 {
	echo	$this->response([
			'returned from delete:' => "rhssds",
		]); die('erretr');
		 
	 }
	 
}
?>