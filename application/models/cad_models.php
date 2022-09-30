<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_models extends CI_Model {

  public function index(){

    return $this->db->get("myTable")->result_array();

  }

  public function insert($dataCad){
    $this->db->insert("myTable",$dataCad);
    redirect('CadastroController/cadastro');

  }
  public function statusCad(){
   if($this->db->affected_rows() >0){
     $data['status'] = "success";
     return $data;
 }
  }
  public function show($id){
    return $this->db->get_where('myTable',array('id'=>$id))->row_array();
  }

  public function update($id,$edit){
    $this->db->where('id',$id);
    return $this->db->update('myTable',$edit);
  }

  public function delete($id){
  $this->db->delete('myTable', array('id' => $id));
  }
}
