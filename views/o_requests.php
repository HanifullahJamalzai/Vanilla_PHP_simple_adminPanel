<?php
session_start();
if (!(isset($_SESSION['full_name']))) {
	header('location: 404.php');	
}
include '../components/header.php';
include '../models/Db.php';
include '../models/o_intern_db.php';


$o_intern_db = new o_intern_db();
$requests = $o_intern_db->select();
// var_dump($requests);

?>
<div class="container-fluid">

	<div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary">Internship Offer Table</h6>
	    </div>
	    <div class="card-body">
	      <div class="table-responsive">
	        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	          <thead>
	            <tr>
	              <th>#</th>
	              <th>Full name</th>
	              <th>Email</th>
	              <th>Field of Study</th>
	              <th>University</th>
	              <th>Year of Graduation</th>
	              <th>Note</th>
	              <th>Reg(Date & Time)</th>
	            </tr>
	          </thead>
	          <tfoot>
	            <tr>
	              <th>#</th>
	              <th>Full name</th>
	              <th>Email</th>
	              <th>Field of Study</th>
	              <th>University</th>
	              <th>Year of Graduation</th>
	              <th>Note</th>
	              <th>Reg(Date & Time)</th>
	            </tr>
	          </tfoot>
	          <tbody>
	          	<?php 
	          	$x = 1;
	          	foreach ($requests as $request) {
	          		echo '
			            <tr>
			              <td>'.$x++.'</td>
			              <td>'.$request['oi_full_name'].'</td>
			              <td>'.$request['oi_email'].'</td>
			              <td>'.$request['oi_field_of_study'].'</td>
			              <td>'.$request['oi_university'].'</td>
			              <td>'.$request['oi_year_of_graduation'].'</td>
			              <td>
			              		'.$request['oi_note'].'
			              </td>
			              <td>'.$request['oi_register_date'].'</td>

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