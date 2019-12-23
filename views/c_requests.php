<?php
session_start();
if (!(isset($_SESSION['id']))) {
	header('location: 404.php');	
}
include '../components/header.php';
include '../models/Db.php';
include '../models/contact_db.php';



$contact_db = new contact_db();
$requests = $contact_db->select();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary">Contact Requests Table</h6>
	    </div>
	    <div class="card-body">
	      <div class="table-responsive">
	        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	          <thead>
	            <tr>
	              <th>#</th>
	              <th>Name</th>
	              <th>Email</th>
	              <th>Comments</th>
	              <th>Date & Time</th>
	            </tr>
	          </thead>
	          <tfoot>
	            <tr>
	              <th>#</th>
	              <th>Name</th>
	              <th>Email</th>
	              <th>Comments</th>
	              <th>Date & Time</th>
	            </tr>
	          </tfoot>
	          <tbody>
	          	<?php 
	          	$x = 1;
	          	foreach ($requests as $request) {
	          		echo '
			            <tr>
			              <td>'.$x++.'</td>
			              <td>'.$request['c_name'].'</td>
			              <td>'.$request['c_email'].'</td>
			              <td>'.$request['c_comment'].'</td>
			              <td>'.$request['c_register_date'].'</td>
			            </tr>
	          		';
	          	}
	          	?>
	            
	          </tbody>
	        </table>
	      </div>
	    </div>

	  </div>

	</div>



<?php 

include '../components/footer.php';

?>