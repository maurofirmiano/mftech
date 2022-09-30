<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrosControll extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
}
	public function registros()
	{
		$data['pageActive'] = "Registros";
		$data['pageTitle'] = "Registros - MF Technology";
    $this->load->model('cad_models');
		$data['registros']= $this->cad_models->index();

		$this->load->view('header', $data);
		$this->load->view('sidenav');
    $this->load->view('main', $data);
    $data['title'] = 'Registros';
		$this->load->view('registros', $data);
		$this->load->view('footer');

	}

	}
