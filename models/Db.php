<?php 

class Db
{
	protected static $db;
	protected $table;
	protected $pk;
	
	function __construct()
	{
		self::connect();
		
	}
	public static function connect(){
		if (self::$db) {
			return;
		}
		self::$db = new mysqli("localhost", "root", "", "acc");
		
	}
	public function select($where = null, $single = false)
	{
		$query = "SELECT * FROM {$this->table}".(($where) ? " WHERE ". $where : "");
		$result = self::$db->query($query);
		if ($single) {
			return $result->fetch_assoc();
		}
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function insert($columns, $values){
       
        $dynamic = " INSERT INTO {$this->table}" ."(";

        foreach ($columns as $col) {
            $dynamic = $dynamic . $col .", ";
        }

        $dynamic = trim($dynamic, ', ');
        $dynamic = $dynamic .") VALUES(";

        foreach ($values as $val) {
            $dynamic = $dynamic . "'". $val ."', ";
        }
        $dynamic = trim($dynamic, ', ');
        $dynamic = $dynamic .")";
        // echo $dynamic;
        // exit;
        self::$db->query($dynamic);
        
    }

     public function delete($id){
        $query = " DELETE FROM {$this->table}"."WHERE". $this->pk." = ".$id;
        self::$db->query($query);
    }

 //    public function login($logname, $password){

 //  	$query = "SELECT * FROM administration  WHERE a_login_name = ".$logname." AND a_password = ".$password." ";
 //  	$result = self::$db->query($query);
	// return $result->fetch_assoc();

  	
 //  	// $row = $result->fetch_assoc();
 //  	// $_SESSION['full_name'] = $row['a_full_name'];
 //  	// $_SESSION['login_name'] = $row['a_login_name'];
 //  	// $_SESSION['email'] = $row['a_email'];

 //  	// return $row;
	// }

}


?>