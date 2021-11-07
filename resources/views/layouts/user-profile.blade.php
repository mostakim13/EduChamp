<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	@include('layouts.styles')
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	@include('layouts.header')
	<!-- header end -->
	<!-- Left sidebar menu start -->
	@include('layouts.left-sidebar')
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">User Profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>User Profile</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>User Profile</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="Mark Andre">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Occupation</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="CTO">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Company Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="EduChamp">
											<span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="+120 012345 6789">
										</div>
									</div>
									
									<div class="seperator"></div>
									
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. Address</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Address</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="5-S2-20 Dummy City, UK">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">City</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="US">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">State</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="California">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Postcode</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="000702">
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3 class="m-form__section">3. Social Links</h3>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Linkedin</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="www.linkedin.com">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Facebook</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="www.facebook.com">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Twitter</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="www.twitter.com">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Instagram</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="www.instagram.com">
										</div>
									</div>
								</div>
								<div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-7">
												<button type="reset" class="btn">Save changes</button>
												<button type="reset" class="btn-secondry">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<form class="edit-profile">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>4. Password</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Current Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Re Type Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
									</div>
									<div class="col-sm-7">
										<button type="reset" class="btn">Save changes</button>
										<button type="reset" class="btn-secondry">Cancel</button>
									</div>
								</div>
									
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
@include('layouts.scripts')
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
</html>