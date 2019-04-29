<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function loginAction($username, $password){
		return $this->db->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'")->num_rows();
	}
}