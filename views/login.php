<?php 
include '../components/lheader.php';
if(isset($_SESSION['id'])){
	header('location: index.php');
}

include '../models/Db.php';
include '../models/administration_db.php';

$lognameErr = $passErr = $confirmErr = $notmuch= "";
$logname = $pass = $confirmpass = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (empty($_POST['logname'])) {
		$lognameErr = "Login Name Must not be Empty";
	}else{
		$logname = test_input($_POST['logname']);
	}

	if (empty($_POST['pass'])) {
		$passErr = "Password Must not be Empty!";
	}else{
		$pass = test_input($_POST['pass']);
	}

	if (empty($_POST['confirmpass'])) {
		$confirmErr = "Confirm Password Must not be Empty!";
	}else{
		$confirmpass = test_input($_POST['confirmpass']);
	}

	if ($pass != $confirmpass) {
		$notmuch = "Passwords didnot Much !";
	}

}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($logname && $pass && $confirmpass) {
	$administration_db = new administration_db();
	$pass = md5($pass);

	$result = $administration_db->login($logname, $pass);
	
	$_SESSION['id'] = $result['a_id'];
	$_SESSION['full_name'] = $result['a_full_name'];
  	$_SESSION['login_name'] = $result['a_login_name'];
  	$_SESSION['email'] = $result['a_email'];
  	$_SESSION['profile_photo'] = $result['a_profile'];
  	$_SESSION['password'] = $result['a_password'];
  	
	if(isset($_SESSION['id'])){
		header('location: index.php');
	}
	
}

?>

<body class="bg-dark">

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
	              <div class="col-lg-6">
	                <div class="p-5">
	                  <div class="text-center">
	                    <h1 class="h4 text-gray-900 mb-4">Welcome to ACC Admin Panel!</h1>
	                  </div>

	               <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate="novalidate">

	                    <div class="form-group">
	                      <input type="email" class="form-control form-control" name="logname" placeholder="Login Name">
	                    	<small class="text-danger"> <?php echo $lognameErr; ?> </small>
	                    </div>

	                    <div class="form-group">
	                      <input type="password" class="form-control form-control" name="pass" placeholder="Password">
	                    	<small class="text-danger"> <?php echo $passErr; ?> </small>
	                    </div>

	                    <div class="form-group">
	                      <input type="password" class="form-control form-control" name="confirmpass" placeholder="Confirm Password">
	                    	<small class="text-danger"> <?php echo $confirmErr; ?> </small>
	                    </div>
	                    	<small class="text-danger"> <?php echo $notmuch; ?> </small>

	                    <button type="submit" name="submit" class="btn btn-dark btn-block">
	                      Login
	                    </button>
	                   
		                <div class="text-center">
		                    <a class="small" href="<?php echo base_url();?>/views/forgotpsw.php">Forgot Password?</a>
		                </div>
		                  
		                <div class="text-center">
	                    		<a class="small" href="<?php echo base_url();?>/views/create.php">Create an Account!</a>
	                  	</div>
                  
                  </form>
                  
                </div>
              </div>
            </div>
            <!-- End of Row -->

          </div>
        </div>
      </div>
    </div>

  </div>

<?php 

include '../components/lfooter.php';

?>