<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Sign Up</title>
	<link rel="icon" href="../img/Colins.png" type="image/png">
  <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="../vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="../css/account.css">
  <!-- <script src="../js/registrationvalidation.js"></script> -->
</head>

<body class="full-width">
  <!--================Login Box Area =================-->
	<section class="login_box_area">
		<div class="">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Already Have An Account?</h4>
							<a class="button button-account" href="login.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<form class="row login_form" method = "post" action="registerprocess.php" id="register_form" >
							<div class="col-md-12 form-group error" id = "nameErr">
								<input type="text" class="form-control" id="nameErr" name="customer_name" placeholder="Username" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>

							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="customer_email" placeholder="Email Address" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
							</div>

							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="customer_pass" placeholder="Password" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>

							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirm_pass" placeholder="Confirm Password" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="country" name="customer_country" placeholder="Country" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'">
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="city" name="customer_city" placeholder="City" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'">
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="customer_contact" name="customer_contact" required placeholder="Contact e.g. +2331234567" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact e.g. +2331234567'">
							</div>
								
							<div class="col-md-12 form-group">
								<button type="submit" name="register" class="button button-login w-100">Register</button>
							</div>
						</form>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!--================End Login Box Area =================-->

  <script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="../vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../vendors/skrollr.min.js"></script>
  <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="../vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="../vendors/jquery.ajaxchimp.min.js"></script>
  <script src="../vendors/mail-script.js"></script>
  <script src="../js/main.js"></script>
  
</body>
</html>