<?php

namespace app\transfer;

class User{
	public $id;
	public $login;
	public $role;
	
	public function __construct($id, $login, $role){
		$this->id = $id;
		$this->login = $login;
		$this->role = $role;		
	}	
}