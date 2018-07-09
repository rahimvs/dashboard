<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($username){

		try {
			$stmt = $this->_db->prepare('SELECT password, username, memberID FROM members WHERE username = :username');
			$stmt->execute(array('username' => $username));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}
	public function isValidUsername($username){
		if (strlen($username) < 3) {return false;}
		if (strlen($username) > 17) return false;
		if (!ctype_alnum($username)) return false;
		return true;
	}

	public function LoginAttempt($username){
		$sql = "UPDATE members 
		SET attempts = attempts + 1 
		WHERE username = :username";
		$statement = $this->_db->prepare($sql);
		$statement->bindParam(':username', $username, PDO::PARAM_STR); 
		$statement->execute();
	}
	public function resetLoginAttempt($username){
		$sql = "UPDATE members 
		SET attempts =0 
		WHERE username = :username";
		$statement = $this->_db->prepare($sql);
		$statement->bindParam(':username', $username, PDO::PARAM_STR); 
		$statement->execute();
	}
	public function calculateAttemptValue($username){
		$q = $this->_db->query("SELECT attempts FROM `members` WHERE username='".$username."'");
  		$f = $q->fetch();
		  $result = $f['attempts'];
		  
		  if($result>=3){
			echo '<H1>BLOCKED</H1>';
			die();
		  }else{
			echo '<p class="bg-danger"><center  style="color:red;">WARNING '.$result.' FAILED LOGIN ATTEMPT</center></p>';
		  }		
	}

	public function blocking($username){
		$this->LoginAttempt($username);
		$this->LoginAttempt($username);
		
	}

	public function login($username,$password){
		if (!$this->isValidUsername($username)) return false;
		if (strlen($password) < 3) return false;

		$row = $this->get_user_hash($username);

		if($this->password_verify($password,$row['password']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['username'] = $row['username'];
		    $_SESSION['memberID'] = $row['memberID'];
		    return true;
		}
	}
	

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}
}
?>
