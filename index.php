<!DOCTYPE html>
<html>
    
<head>
	<title> LogIn </title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"> 	
	<link rel="stylesheet" href="assets/css/login.css"> 	
	<link rel="stylesheet" href="assets/css/style.css"> 	
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/image/logo.jpeg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<?php
					if(isset($_GET['sign-up']))
					{
				?>
				   <div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label  " for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links ">
						Already created an account? <a href="index.php" class="ml-2 text-marron">Sign In</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#" class="text-marron">Forgot your password?</a>
					</div>
				</div>
				<?php
					}else{
				?>
						<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label  " for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links ">
						Don't have an account? <a href="?sign-up=1" class="ml-2 text-marron">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#" class="text-marron">Forgot your password?</a>
					</div>
				</div>
				<?php

					}
				?>
				
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.7.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"> </script>
</body>
</html>
