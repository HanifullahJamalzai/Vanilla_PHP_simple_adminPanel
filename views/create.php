<?php 
include '../components/lheader.php';
?>



<body class="bg-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account !</h1>
                  </div>

                 <form class="user">
	                <div class="form-group row">
	                  <div class="col-sm-6 mb-3 mb-sm-0">
	                    <input type="text" class="form-control form-control" id="exampleFirstName" placeholder="Full Name">
	                  </div>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control form-control" id="exampleLastName" placeholder="Login Name">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <input type="email" class="form-control form-control" id="exampleInputEmail" placeholder="Email Address">
	                </div>

	                <div class="form-group row">
	                  <div class="col-sm-6 mb-3 mb-sm-0">
	                    <input type="password" class="form-control form-control" id="exampleInputPassword" placeholder="Password">
	                  </div>
	                  <div class="col-sm-6">
	                    <input type="password" class="form-control form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
	                  </div>
	                </div>
	                <a href="login.html" class="btn btn-dark btn btn-block">
	                  Register Account
	                </a>

                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>/views/login.php">Back to Login?</a>
                  </div>
              </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

<?php 

include '../components/lfooter.php';

?>