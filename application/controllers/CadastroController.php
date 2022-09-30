<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
}
public function cadastro() {

  $data['pageTitle'] = "Cadastro - MF Technology";
  $data['pageActive'] = "Cadastro";
  $this->load->model('cad_models');
  $data['status'] = $this->cad_models->statusCad();

  $this->load->view('header',$data);
  $this->load->view('sidenav');
  $this->load->view('main',$data);
  $this->load->view('cadastro',$data);
  $this->load->view('footer');

}
public function insert(){
  $dataCad = $_POST;
  $this->load->model('cad_models');
  $this->cad_models->insert($dataCad);
}
public function edit($id){
  $data['pageActive'] = "Editar Registro";
  $data['pageTitle'] = "Registros - MF Technology";
  $this->load->model('cad_models');
  $data['edit']= $this->cad_models->show($id);

  $this->load->view('header',$data);
  $this->load->view('sidenav');
  $this->load->view('main',$data);
  $this->load->view('cadastro',$data);
  $this->load->view('footer');
}
public function update($id){
  $this->load->model('cad_models');
  $edit = $_POST;
  $this->cad_models->update($id,$edit);
  redirect('registros');
}
public function delete($id){
  $this->load->model('cad_models');
  $this->cad_models->delete($id);
  redirect('registros');
}

}
