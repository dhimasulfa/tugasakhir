<?php
class Login_model extends CI_Model{
	//cek username dan password
	public $username;
    public $password;
    public $uname;
    public $pass;

	function auth_login($username, $password){
		$query = $this->db->query("SELECT * FROM petani WHERE ptn_uname='$username' AND ptn_password='$password' AND ptn_status='terverivikasi' LIMIT 1");
		return $query;
	}
	function auth_user($uname, $pass){
		$query = $this->db->query("SELECT * FROM tengkulak WHERE tkl_uname='$username' AND tkl_password='$password' AND tkl_status='terverivikasi' LIMIT 1");
		return $query;
	}
}
?>