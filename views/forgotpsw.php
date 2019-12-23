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
                    <h1 class="h4 text-gray-900 mb-4">Forgot Your Password?</h1>
                    <p>
                    	Just enter your email address below and we'll send you a link to reset your password!
                    </p>
                  </div>
                  <form class="user">

                    <div class="form-group">
                      <input type="email" class="form-control form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <a href="<?php echo base_url();?>/assets/index.html" class="btn btn-dark btn-block">
                      Reset Password
                    </a>
                   
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>/views/login.php">Back to Login Page</a>
                  </div>

                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>/views/create.php">Create an Account!</a>
                  </div>
                  
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