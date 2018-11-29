<?php
class Adminmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_all_section()
	{  
	    $this->db->select('*');
		$this->db->from('tbl_section');	 						
		$this->query=$this->db->get();				
		return $this->query->result();	 
	}
	
	public function get_staff($sectionid)
	{ 
		$this->db->select('*');
		$this->db->from('tbl_staff');	 
		$this->db->join('tbl_section', 'tbl_staff.sectionid = tbl_section.id');		
		$this->db->where('sectionid',$sectionid);					
		$this->query=$this->db->get();
		return $this->query->result(); 
	}
	
	
}

?>