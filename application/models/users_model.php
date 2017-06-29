<?php

class Users_model extends CI_Model {
 public function getUsers(){
	 $query=$this->db->get('users');
	 
	 if($query->num_rows()>0){
		 return $query->result();
	 }else{
	 return false;
	 }
	 
 }
 public function submit(){
	 
	 $field=array(
	 'name'=>$this->input->post('name'),
	 'email'=>$this->input->post('email'),
	 'mobile'=>$this->input->post('mobile'),
	 'address'=>$this->input->post('address')
	 );
	 $this->db->insert('users', $field);
	 if($this->db->affected_rows()>0){
		 return true;
		 
	 }else{
		 return false;
		 
	 }
 }
 public function getUserById($id){
	 $this->db->where('id', $id);
	 $query=$this->db->get('users');
	 if($query->num_rows()>0){
		 return $query->row();
		 
	 }
 }
 public function update(){
	 
	 $id=$this->input->post('id');
	 $field=array(
	 'name' =>$this->input->post('name'),
	 'email' =>$this->input->post('email'),
	 'mobile' =>$this->input->post('mobile'),
	 'address' =>$this->input->post('address')
	 );
	 $this->db->where('id', $id);
	 $this->db->update('users', $field);
	 if($this->db->affected_rows()>0){
		 return  true;
		 
	 }else{
		 return false;
	 }
 }
  public function deleteuser($id){
	 $this->db->where('id', $id);
	 $query=$this->db->delete('users');
	 if($this->db->affected_rows()>0){
		 return  true;
		 
	 }else{
		 return false;
	 }
 }

}

?>
