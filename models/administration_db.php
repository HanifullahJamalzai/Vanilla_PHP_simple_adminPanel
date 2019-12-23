<?php 


class administration_db extends Db
{
	protected $table = "administration";
	protected $pk = "a_id";	

	public function login($logname, $password){
	$sql = " SELECT * FROM administration WHERE a_login_name = '$logname' AND a_password = '$password'";
  	$result = self::$db->query($sql);

	// $result = $conn->query($sql);
  	// $result = die(self::$db->error);
  	// echo $result;
	return $result->fetch_assoc();
	}

	public function profile($id){
		$sql = " SELECT * FROM administration WHERE ". $this->pk ." = ". $id;
		$result = self::$db->query($sql);
		return $result->fetch_assoc();
	}

}


?>