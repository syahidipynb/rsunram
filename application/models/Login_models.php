<?php
class Login_models extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
	//cek nip dan password dosen
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE usere='$username' AND passworde=MD5('$password') ");
		return $query;
	}

}
