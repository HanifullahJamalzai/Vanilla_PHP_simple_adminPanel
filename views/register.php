<?php 
session_start();
if (!(isset($_SESSION['id']))) {
	header('location: 404.php');	
}
include '../components/header.php';

	$emailErr = $nameErr = $lognameErr = $passErr = $confirmErr = $pass_match = $profileErr = $file_match = "";
	$email = $full_name = $logname = $password = $profile = "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if (empty($_POST['a_full_name'])) {
			$nameErr = "Login Name Must not be Empty";
		}else{
			$full_name = test_input($_POST['a_full_name']);
		}

		if (empty($_POST['a_login_name'])) {
			$lognameErr = "Login Name Must not be Empty";
		}else{
			$logname = test_input($_POST['a_login_name']);
		}

		if (empty($_POST['a_email'])) {
			$emailErr = "Login Name Must not be Empty!";
		}else{
			$email = test_input($_POST['a_email']);
		}

		if (empty($_POST['a_password'])) {
			$passErr = "Password Must not be Empty!";
		}else{
			$pass = test_input($_POST['a_password']);
		}

		if (empty($_POST['confirm'])) {
			$confirmErr = "Confirm Password Must not be Empty!";
		}else{
			$confirm = test_input($_POST['confirm']);
		}

		if ($pass != $confirm) {
			$pass_match = "Passwords are not same!";
		}else{
			$password = md5($pass);
		}
		// var_dump($_FILES['a_profile']);
		// exit;
		if (empty($_FILES['a_profile']['name'])) {
				$profileErr = "profile photo must not be empty!";
			}else{
				$profile = $_FILES['a_profile']['name'];
				$extension =pathinfo($profile,PATHINFO_EXTENSION);

				if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'gif') {
					$file_match = "<h1 style='color: red;'>File or Extensions not match</h1>";
				}
				else{
					$target_name = "../uploads/". $_FILES['a_profile']['name'];
					$tmp_name = $_FILES['a_profile']['tmp_name'];
					move_uploaded_file($tmp_name, $target_name); 
				}

			}
		}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ($full_name && $logname && $email && $password && $profile) {
		
		include '../models/Db.php';
		include '../models/administration_db.php';

		$columns = array('a_full_name', 'a_login_name', 'a_email', 'a_password', 'a_profile');
		$values = array($full_name, $logname, $email, $password, $profile);

		$administration_db = new administration_db();
		// $administration_db->insert();

		if ($administration_db->insert($columns, $values)) {
		     	header('location: $_SERVER["PHP_SELF"]');
		      } 

	}


?>

<div class="container">
	<h1 class="display-5">Registration of New Admin:</h1>
	<small>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	</small>
	<br>
	<br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate="novalidate" enctype="multipart/form-data">

		<div class="form-group col-md-8">
			<input type="text" class="form-control" name="a_full_name" placeholder="Full Name">
			<small class="text-danger"> <?php echo $nameErr; ?> </small>
		</div>

		<div class="form-group col-md-8">
			<input type="text" class="form-control" name="a_login_name" placeholder="Login Name">
			<small class="text-danger"> <?php echo $lognameErr; ?> </small>
		</div>

		<div class="form-group col-md-8">
			<input type="text" class="form-control" name="a_email" placeholder="Email">
			<small class="text-danger"> <?php echo $emailErr; ?> </small>
		</div>

		<div class="form-group col-md-8">
			<input type="password" class="form-control" name="a_password" placeholder="Password">
			<small class="text-danger"> <?php echo $passErr; ?> </small>
		</div>

		<div class="form-group col-md-8">
			<input type="password" class="form-control" name="confirm" placeholder="Confirm Password">
			<small class="text-danger"> <?php echo $confirmErr; ?> </small>
			<small class="text-danger"> <?php echo $pass_match; ?> </small>
		</div>
		
		<div class="form-group col-md-8">
			<input type="file" class="form-control-file" name="a_profile">
			<small class="text-danger"> <?php echo $profileErr; ?> </small>
			<small class="text-danger"> <?php echo $file_match; ?> </small>
		</div>
		
		<div class="form-group col-md-8">
			<button type="Submit" name="Submit" class="form-control btn btn-outline-dark">Submit</button>
		</div>
	</form>

</div>


 <?php 
 include '../components/footer.php';


 ?>