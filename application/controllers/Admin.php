<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');		
	}
	public function createduty()
	{		
		$data['rec']=$this->Adminmodel->get_all_section();	
		$this->load->view('admin/header');
		$this->load->view('admin/createduty',$data);
		$this->load->view('admin/footer');		
	}	
	
	public function get_staff()
	{ 
		$sectionid=$this->input->post('sectionid');
		$data=$this->Adminmodel->get_staff($sectionid);		
		//echo $sectionid;
		$str='';		
		foreach($data as $r)
		{
			$str.='<option value="'.$r->sname.'">'.$r->sname.'</option>';
		}
		echo $str;
	}
}
?>
