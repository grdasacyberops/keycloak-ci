<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/SecureByKeycloak.php");
class Secured extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('secured_view');	
		// if(!empty($this->session->userdata('user'))){ 
		// 	$this->load->view('secured_view');
		// }
	}
}
