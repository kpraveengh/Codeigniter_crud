<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('users_model','m');

}
public function index(){
	
	$data['user_list']= $this->m->getUsers();
	$this->load->view('show_users', $data);
}
public function add(){
	
	$this->load->view('insert');
}

public function submit(){
	
	$result=$this->m->submit();
	if($result){
		$this->session->set_flashdata('msg', 'Record Succesfully Inserted');
	}else{
		$this->session->set_flashdata('msg', 'Something went wrong');
	}
	redirect(base_url());
}
public function edit($id){
	$data['user']=$this->m->getUserById($id);
	
	$this->load->view('edit', $data);
}
public function update(){
	
	$result=$this->m->update();
	if($result){
		$this->session->set_flashdata('msg', 'Record Succesfully Updated');
	}else{
		$this->session->set_flashdata('msg', 'Something went wrong');
	}
	redirect(base_url());
}

public function deleteuser($id){
	$result=$this->m->deleteuser($id);
	if($result){
		$this->session->set_flashdata('msg', 'Record Succesfully Deleted');
	}else{
		$this->session->set_flashdata('msg', 'Something went wrong');
	}
	redirect(base_url());
	
}




}
