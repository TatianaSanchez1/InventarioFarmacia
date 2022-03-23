<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser {

	public function user_login($username, $password)
	{
		$sql = "SELECT *
				FROM user 
				WHERE user_account = ?
				AND user_pass = ?
		";
		return $this->getRow($sql, [$username, $password]);
	}//end login_user
	
	public function user_register($name, $username, $email, $password){
		$sql = "INSERT INTO
				user(user_account, user_pass, name, email)
				VALUES 
				($username, $password, $name, $email) ";

		return $this->insertRow($sql, [$username, $password, $name, $email]);
	}

}//en class User

$user = new User();

/* End of file User.php */
/* Location: .//D/xampp/htdocs/regis/class/User.php */

