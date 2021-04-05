<?php 
<<<<<<< HEAD
class m_register extends CI_Model 
=======
class M_register extends CI_Model 
>>>>>>> f0776ea295678fffd3bb852a198cd5b737bfa743
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
		);
		$this->db->insert('user',$data_user);
	}
}
?>