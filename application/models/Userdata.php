<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdata extends CI_Model
 {
   
	public function __construct()
	{
		parent::__construct();
    }
    public function insert($table,$data)
    {
      return $this->db->insert($table,$data);
    }
 }
?>