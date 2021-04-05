<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>  
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
<h1 class="text">Registrasi Akun</h1>
<hr>

<form class="form-style-1 placeholder-1" action="<?php echo base_url('register/proses'); ?>" method="post">
<div class="container-fluid">
		<div class="row-center">
    	<div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-pencil"></span> <strong>REGISTER</strong>
            </div>
			<div class="panel-body">
				<div class="form-group">
				<p class="col-sm-15">Masukkan Username</p>
				<div class="col-sm-15">
						<input class="form-control" type="text" name="username" placeholder="Username"> 
				</div>

<div class="panel-body">
				<div class="form-group">
				<p class="col-sm-15">Tanggal lahir</p>
				<div class="col-sm-15">
						<input class="form-control" type="text" name="ttl" placeholder="ttl"> 
				</div>

				<div class="panel-body">
				<div class="form-group">
				<p class="col-sm-15">Alamat</p>
				<div class="col-sm-15">
						<input class="form-control" type="text" name="alamat" placeholder="Alamat"> 
				</div>

				<div class="form-group">
				<p class="col-sm-15">Masukkan Password</p>
				<div class="col-sm-15">      
						<input class="form-control" type="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
				<p class="col-sm-15">Konfirmasi Password</p>
				<div class="col-sm-15">
						<input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
				</div>
				<div class="form-group last">
				<div class="col-sm-15">
        			<div class="text-center">
					<p> </p>
                		<button class="btn btn-success btn-sm" type="submit" name="submit"><p>Register</p></button>
					</div>
				</div>
        </div>
</form>
<center>
	<div class="col-md-15 m-auto">
        <h5 class="text-center mt-20"><a href="<?= base_url(); ?>login/">Already have an account? Login</a></h5>
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