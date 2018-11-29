<?php
class Loginmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function checklogin($username,$password)
	{  
	    $this->db->select('*');
		$this->db->from('tbl_staff');	 		
		$this->db->where('username',$username);							
		$this->db->where('password',$password);							
		$this->query=$this->db->get();		
		$noofrows = $this->query->num_rows();
	    return $noofrows;
	}
	
	
}

?>