<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="webThemez.com">	
	<link rel="icon" href="assets/images/lancanabig.png">		
	<title>Lancana.id</title>

	<link rel="favicon" href="assets/images/favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/style.css">

	
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href='/'><img src="assets/images/lancana.png" widht="180" height="30" alt="Atlanta HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href='/'>Home</a></li>
					<li><a href='about'>About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Left Sidebar</a></li>
							<li><a href='artikel'>Artikel</a></li>
						</ul>
					</li>
					
					<li class="active"><a class="btn" href='daftar'>SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							
							<hr>
							@error('email')
								<small>{{ $message }}</small>
							@enderror
							<form action="/postlogin" method="post">
								@csrf
								<div class="top-margin">
									<label>Username/Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control" name="email">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="password">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Forgot password?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Sign in</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 panel">
						<h3 class="panel-title">About Lancana</h3>
						<div class="panel-body">
							<p>Lorem ipsum dolor amet, consectetur adipiscing elit. Aenean leo lectus sollicitudin convallis eget libero. Aliquam laoreet tellus ut libero semper, egestas velit malesuada. Sed non risus eget dolor amet vestibulum ullamcorper. Integer feugiat molestie.</p> 
						</div>
					</div>

					<div class="col-md-4 panel contact"> 
						<h3 class="panel-title">Contact Info</h4>
						<div class="panel-body">
							<p>Hubungi kami .</p>
							<ul>
							  <li><i class="fa fa-phone"></i>0812-3418-9999</li>
							  <li><a href="#"><i class="fa fa-envelope-o"></i> lancana@gmail.com</a></li>
							  <li><i class="fa fa-flag"></i>Gubeng Jaya</li>
						</div>
					</div>

					<div class="col-md-3 panel">
						<h3 class="panel-title">Follow me</h3>
						<div class="panel-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
								<a href=""><i class="fa fa-youtube fa-2"></i></a>
								<a href=""><i class="fa fa-pinterest fa-2"></i></a>
							</p>	
						</div>
					</div>
			
				</div> <!-- /row of panels -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href='/'>Home</a> | 
								<a href='about'>About</a> |
				
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2021.
							</p>
						</div>
					</div>

				</div> <!-- /row of panels -->
			</div>
		</div>

	</footer>	
		



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>