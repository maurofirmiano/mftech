<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    function __construct(){
		    parent::__construct();
		    $this->load->helper('url');
    }

	public function login()
	{

    $data['pageTitle'] = 'Login - MF Technology';
    $data['pageActive'] ='Login';
    $this->load->view('header', $data);
    $this->load->view('sidenav');
    $this->load->view('main',$data);
    $this->load->view('login',$data);
    $this->load->view('footer');
	}
}
