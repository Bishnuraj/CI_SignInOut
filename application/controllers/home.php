<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
	$this->homepage();
	}

	public function homepage()
	{
	$this->load->view('header');
	if($email = $this->session->userdata('is_logged_in')){
	$this->load->model('credential');
	$data['user'] = $this->credential->user_data($this->session->userdata('email'));
	$this->load->view('homepage',$data);
	}else{
	$this->load->view('homepage');
	}
	$this->load->view('footer');
	}
	
	public function about(){
	$this->load->view('header');
	$this->load->view('about');
	$this->load->view('footer');
	}
	
	public function logout()
	{
	$this->session->sess_destroy();
	redirect(home/index);
	}
	
	public function register()
	{
	$this->load->view('header');
	$this->load->view('register');
	$this->load->view('footer');
	}

	public function login()
	{
	$this->load->view('header');
	$this->load->view('login');
	$this->load->view('footer');
	}

	public function register_check()
	{
	$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
	$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[4]|xss_clean|alpha');
	$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]|xss_clean|alpha');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email_id]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
	$this->form_validation->set_rules('re-password', 'Password Confirmation', 'trim|required|matches[password]');
	$this->form_validation->set_rules('phone', 'Phone number', 'trim|required|exact_length[10]|numeric');
	$this->form_validation->set_message('is_unique','This email address already exists.');

	if($this->form_validation->run())
	{
	$this->load->model('credential');
	$this->credential->user_add();
	$this->index();
	}
	else
	{
	$this->register();
	}
	}

	public function login_check()
	{
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_validate_user');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

	if($this->form_validation->run())
	{
	$data = array(
		'email' => $this->input->post('email'),
		'is_logged_in' => 1
	);
	$this->session->set_userdata($data);
	$this->index();
	}
	else
	{
	$this->login();
	}
	}
	
	public function validate_user()
	{
	$this->load->model('credential');
	if($this->credential->user_verify())
	{
	return true;
	}
	else
	{
	$this->form_validation->set_message('validate_user','Incorrect Username/Password combination. Try again!!!');
	return false;
	}
	}
}

?>