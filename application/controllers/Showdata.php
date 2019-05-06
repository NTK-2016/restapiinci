<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Showdata extends CI_Conttroller
  {
    function __construct() 
	{
        parent::__construct();
        $this->load->model('Userdata');  
    }
    public function save_userdata()
    {    
        $email = $this->input->post();
        $password = $this->input->post();
        $token =  $this->input->post();
        $data = array
                ('email'=>$email,
                'password'=>$password,
                 'token'=>$token    
                ); 

       $this->Userdata->insert('userinfo',$data);
    }
  }

?>