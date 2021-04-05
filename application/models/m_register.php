<?php 

class M_register extends CI_Model 

{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>md5($password),
		);
		$this->db->insert('user',$data_user);
	}
}
?>