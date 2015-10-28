<?php

class Credential extends CI_Model{
	
	public function user_verify(){
	
	$this->db->where('email_id',$this->input->post('email'));
	$this->db->where('password',md5($this->input->post('password')));
	$query = $this->db->get('users');
	
	if($query->num_rows() == 1){
		return true;
	} else {
		return false;
	}
	}

	public function user_add(){
		$data = array(
			'user_name' => $this->input->post('username'),
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'email_id' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'gender' => $this->input->post('gender'),
			'phone_no' => $this->input->post('phone'),
			'country' => $this->input->post('country'),
			'about' => $this->input->post('about')
		);
	$query = $this->db->insert('users',$data);
	if($query)
		return true;
	else
		return false;
	}
	
	public function user_data($email){
	$this->db->select('user_name');
	$this->db->from('users');
	$this->db->where('email_id',$email);
	$query = $this->db->get();
	return $query->result();
	}
}