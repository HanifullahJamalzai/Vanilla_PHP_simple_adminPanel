<?php 
session_start();
include '../components/header.php';
if (!(isset($_SESSION['id']))) {
	header('location: 404.php');	
}

include '../models/Db.php';
include '../models/administration_db.php';

$id = $_SESSION['id'];
// echo $id;
// exit;
$administration_db = new administration_db();
$result = $administration_db->profile($_SESSION['id']);

// var_dump($result);
 ?>
 <div class="container">
	<h1 class="display-5">Profile</h1>
	
	<br>
	<br>
	<form>

		<div class="form-group col-md-8">
			<img src=" <?php echo base_url(); ?>uploads/<?php echo $result["a_profile"]; ?>" class="form-control-file" name="a_profile"/>
		</div>

		<div class="form-group col-md-8">
			<input type="text" class="form-control" name="a_full_name" value="<?php echo $result["a_full_name"]; ?>" placeholder="Full Name">
		</div>

		<div class="form-group col-md-8">
			<input type="text" class="form-control" name="a_login_name" value="<?php echo $result["a_login_name"]; ?>" placeholder="Login Name">
		</div>

		<div class="form-group col-md-8">
			<input type="text" class="form-control" name="a_email" value="<?php echo $result["a_email"]; ?>" placeholder="Email">
		</div>

		<div class="form-group col-md-8">
			<input type="Password" class="form-control" name="a_password" value="***" placeholder="Password">
		</div>
		
		
		<div class="form-group col-md-8">
			<button class="form-control btn btn-outline-dark">Update</button>
		</div>
	</form>
</div>








 <?php 
 include '../components/footer.php';


 ?>