<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter</title>
</head>
<body>
<div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
<h3 class="text-center">Registrasi</h3>
<br><hr>
<form class="form-style-1 placeholder-1" action="<?php echo base_url('register/proses'); ?>" method="post">


	<input class="mt-20" type="text" name="username" placeholder="Username">
	
        
	<input class="mt-20" type="password" name="password" placeholder="Password">
	

	<input class="mt-20" type="password" name="confirm_password" placeholder="Confirm Password">
	

        <div class="text-center">
                <button class="mtb-20 btn-primaryc plr-25" type="submit" name="submit"><h6>Register</h6></button>
        </div>
</form>
	<div class="col-md-8 m-auto">
        <h5><a href="<?= base_url(); ?>login/">Already have an account? Login</a></h5>
        <h5 class="text-center mt-20"><a href="<?= base_url(); ?>"><i class="ion-arrow-left-c"></i> Back to home</a></h5>
       </div>

</div>
</div>
</body>
</html>