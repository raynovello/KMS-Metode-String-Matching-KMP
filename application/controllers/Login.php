<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$valid = $this->form_validation;
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$valid->set_rules('nip','Nip','trim|required|xss_clean');
		$valid->set_rules('password','Password','trim|required|xss_clean');
		if($valid->run()) {
			$this->simple_login->login($nip,$password);
		}
		$this->load->view('login/login');
	}
	
	public function logout() {
		$this->simple_login->logout();	
	}
}	