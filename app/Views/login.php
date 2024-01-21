<?php
$session = session();
if ($session->has('error')) {
?>
	<div class="flash-message error">
		<?php echo $session->getFlashdata('error'); ?>
	</div>
<?php
}
?>

<!-- Display flash messages for success -->
<?php
if ($session->has('success')) {
?>
	<div class="flash-message success">
		<?php echo $session->getFlashdata('success'); ?>
	</div>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Star Admin2 </title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="./public/assets/vendors/feather/feather.css">
	<link rel="stylesheet" href="./public/assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="./public/assets/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="./public/assets/vendors/typicons/typicons.css">
	<link rel="stylesheet" href="./public/assets/vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="./public/assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="./public/assets/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="./public/assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<img src="./public/assets/images/logo.svg" alt="logo">
							</div>
							<h4>Hello! let's get started</h4>
							<h6 class="fw-light">Sign in to continue.</h6>

							<form class="pt-3" method="POST" action="<?php echo base_url() . 'loginSave'; ?>">
								<div class="form-group">
									<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="email" required autofocus>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
								</div>
								<div class="my-2 d-flex justify-content-between align-items-center">
									<div class="form-check">
										<label class="form-check-label text-muted">
											<input type="checkbox" class="form-check-input">
											Keep me signed in
										</label>
									</div>
									<a href="#" class="auth-link text-black">Forgot password?</a>
								</div>
								<div class="mb-2">
									<button type="button" class="btn btn-block btn-facebook auth-form-btn">
										<i class="ti-facebook me-2"></i>Connect using Facebook
									</button>
								</div>
								<div class="text-center mt-4 fw-light">
									Don't have an account? <a href="<?php echo base_url() . 'register'; ?>" class="text-primary">Create</a>
								</div>
							</form>

							<!-- <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    href="../../index.html">SIGN IN</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form> -->
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="./public/assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="./public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="./public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="./public/assets/js/off-canvas.js"></script>
	<script src="./public/assets/js/hoverable-collapse.js"></script>
	<script src="./public/assets/js/template.js"></script>
	<script src="./public/assets/js/settings.js"></script>
	<script src="./public/assets/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>