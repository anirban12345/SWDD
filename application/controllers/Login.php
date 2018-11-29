<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{	
		$this->load->view('login');
	}
	public function checklogin()
	{		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$loginflag=$this->Loginmodel->checklogin($username,$password);
		
		if($loginflag>0)
		{
			$this->session->set_userdata('username',$username);			
			redirect('Dashboard');	
		}
		else
		{
			$this->session->set_flashdata('msg','Wrong userid or Password');
			redirect('Login');
		}
	}
}
