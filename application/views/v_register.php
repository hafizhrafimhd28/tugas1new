<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Akun</title>
</head>
<body>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">
    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
<div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
<h1 class="text-center">Registrasi Akun</h1>
<form class="form-style-1 placeholder-1" action="<?php echo base_url('register/proses'); ?>" method="post">
<div class="container">
		<div class="row">
    	<div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> <strong>REGISTER</strong>
            </div>
			<div class="panel-body">
				<div class="form-group">
				<div class="col-sm-8">
						<p>Masukkan Username</p>
						<input class="mt-20" type="text" name="username" placeholder="Username"> 
				</div>
				<div class="form-group">
				<div class="col-sm-8">      
						<input class="mt-20" type="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
				<div class="col-sm-8">
						<input class="mt-20" type="password" name="confirm_password" placeholder="Confirm Password">
				</div>
				<div class="form-group">
				<div class="col-sm-8">
        			<div class="text-center">
                		<button class="mtb-20 btn-primaryc plr-25" type="submit" name="submit"><h6>Register</h6></button>
					</div>
				</div>
        </div>
</form>
	<div class="col-md-8 m-auto">
        <h5><a href="<?= base_url(); ?>login/">Already have an account? Login</a></h5>
        <h5 class="text-center mt-20"><a href="<?= base_url(); ?>"><i class="ion-arrow-left-c"></i> Back to home</a></h5>
       </div>

</div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>
</body>
</html>