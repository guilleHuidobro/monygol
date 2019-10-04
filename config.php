<?php
class configuration {
	protected $server;
	protected $username;
	protected $password;
	protected $itemnumber;

	public function __construct() {
	$this->server = "localhost:3306";
	$this->username = "id2561097_guille";
	$this->password = "caribe2018";
	$this->itemnumber = "3";
	}
	public function getserver(){
	return $this->server;
	}
	public function getusername(){
	return $this->username;
	}
	public function getpassword(){
	return $this->password;
	}
	public function getitemnumber(){
	return $this->itemnumber;
	}
}
?>