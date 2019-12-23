<?php 
include '../config/main.php';
?>

<head>
  <meta charset="utf-8">
  <title>404 Page Not Found</title>

  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
  #error{
    padding: 20px;
    margin-top: 100px;

  }
</style>
</head>


<div class="text-center" id="error">
    <div class="error mx-auto" data-text="404">
      404
    </div>
      <p class="lead text-gray-800 mb-5">Page Not Found</p>
      <p class="text-gray-500 mb-0">Its looks You are not allowed to this Page Please sign in</p>
      <a href="<?php echo base_url(); ?>/views/login.php">Go to Login</a>
  </div>
</div>

</html>
