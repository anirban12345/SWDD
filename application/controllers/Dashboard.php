<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{		
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');		
	}
	public function viewduty()
	{		
		$this->load->view('header');
		$this->load->view('duty');
		$this->load->view('footer');		
	}
	
}
