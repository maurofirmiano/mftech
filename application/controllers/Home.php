<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
}
	public function index()
	{
		$data['pageTitle'] = 'MF Technology';
		$data['pageActive'] = "Home";
		$this->load->view('header', $data);
		$this->load->view('sidenav');
		$this->load->view('main');
		$this->load->view('footer');
	}


}
