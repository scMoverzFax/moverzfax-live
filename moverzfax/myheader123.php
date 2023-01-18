<!DOCTYPE html>
<html>
<head>
	<title>Moversfax</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/m_icon.png" />
	<link href="css/bootstrap 4/bootstrap.min.css" rel="stylesheet">
	<link href="css/uikit 3.0.2/uikit.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/editor.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style>

		
		.cotactsAndSignin i, .cotactsAndSignin a{
	 		color: grey;
	 	}
		.cotactsAndSignin i{
 			margin-right: 18px;
 		}
		 .cotactsAndSignin{
		 	float: left;
		 	margin-left: 60px;
		 	margin-top: .50px;
		 	font-family: sans-serif;
		 	font-size: 18px;

	  	}
		.signing{
		 	float: right;
		 	margin-right: 100px;
		 	margin-top: .50px;
		 	font-family: sans-serif;
		 	font-size: 20px;
		 }
		.underline{
		 	background: grey;
		 	height: .10px;
		 	width: 100%;
		 }
		.signing a{
		 	color:grey;
		 }
		.signing a:hover {
		 	color: green;
		 }
		.cotactsAndSignin span, .signing span{
		 	padding-left: 20px;
		 	padding-right: 20px;
		 }
		 #logo{
		 	margin-top: 20px;
		 	margin-left: 80px;
		 	width: 200px;
		 }

		 /*navigation styling*/
		 .links{
		 	float: right;
		 }
		 .links ul{
		 	list-style: none;	
		 	margin: 0;
		 	padding: 0;	 
		 }
		 .links ul li{
		 	margin-top: 30px;
		 	float: left;
		 	width: 150px;
		 	/*height: 20px;*/
		 	background-color: #fff;
		 	opacity: .9;
		 	line-height: 20px;
		 	text-align:center;
		 	font-size:15px;
		 	font-family: sans-serif;
		 	font-weight: bolder;
		 }
		 .links ul li a{
		 	text-decoration: none;
		 	color:black;
		 	display: block;
		 }
		 .links li a:hover{
		 	color:green;
		 }
		 .links ul li ul li{
		 	display: none; 
		 } 
		 .links ul li:hover ul li{
		 	display: block;
		 	border-bottom: solid grey 1px; 
		 }


		 @media (max-width: 600px) {
			.cotactsAndSignin i{
 				margin-right: 10px;
 			}
		 	.cotactsAndSignin{
		 		float: left;
		 		margin-left: 30px;
		 		margin-top: 5px;
		 		font-family: sans-serif;
		 		font-size: 13px;

	  		}
			.signing{
		 		float: right;
		 		margin-right: 50px;
		 		margin-top: 5px;
		 		font-family: sans-serif;
		 		font-size: 13px;
		 	}
		 	.cotactsAndSignin span, .signing span{
				padding-left: 10px;
				padding-right: 10px;
			}
		 	#logo{
		 	margin-top: 1px;
		 	margin-left: 40px;
		 	width: 150px;
		 }
		 }
	</style>
</head>
<body>

	<!--Contacts-->
	<div class="cotactsAndSignin">
		<a href="tel:8668289688" id="call"><i class="fa fa-phone"></i>866-828-9688</a><span> | </span>
		<a href="mailto:support@moverzfax.com"><i class="fa fa-envelope"></i>support@moverzfax.com</a>
	</div>
	<div class="signing">
		<a href="signin.php">Sign In</a><span>|</span><a href="register.php">Sign Up</a>
	</div>
	<br>
	<br>
	<!--underlining-->
	<div class="underline">
		
	</div>
	<!--naviagtion-->
	
<nav class="navbar navbar-default">
	<div class="container-fluid">
	  <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>                        
		</button>
		<a class="navbar-brand w3-red w3-center w3-allerta" href="#">
			<img src="logo2023.jpeg" id="logo">
		</a>
	  </div>
	  <div class="collapse navbar-collapse" id="myNavbar">
		
		
	
		<div class="links">
		<ul class="nav navbar navbar-right">
			<li>
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li >
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li>
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbardrop">Services</a>
				<ul>
					<li><a href="find_a_mover.php">Find a Mover</a></li>
					<li><a href="order_report.php">Order Report</a></li>
					<li><a href="add_review.php">Add a Review</a></li>
				</ul>
			</li>
			<li>
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbardrop">Support</a>
				<ul>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="support.php">Send a Message</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbardrop">More Links</a>
				<ul>
					<li><a class="dropdown-item" href="blog.php">Blog</a></li> 
					<li><a class="dropdown-item" href="link_to_us.php">Link to us</a></li> 
					<li><a class="dropdown-item" href="pro.php">Promotional Video</a></li>
					<!-- <li><a class="dropdown-item" href="#">Testimonials</a> </li> -->
					<li><a class="dropdown-item" href="video.php">Video Testimonials</a></li>

				</ul>
			</li>
		</ul>
	  </div>
	  </div>
	</div>
  </nav>
	
	
	<hr>
			
</body>
</html>