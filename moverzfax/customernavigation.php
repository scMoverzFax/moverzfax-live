<!DOCTYPE html>
<html>
<head>
	<title>MoverzFax</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link rel="shortcut icon" href="img/m_icon.png" />
	<link href="css/bootstrap 4/bootstrap.min.css" rel="stylesheet">
	<link href="css/uikit 3.0.2/uikit.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/editor.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit-icons.min.js">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<style type="text/css">

		.cotactsAndSignin i, .cotactsAndSignin a{
	 		color: grey;
	 	}
		.cotactsAndSignin i{
 			margin-right: 20px;
 		}
		 .cotactsAndSignin{
		 	float: left;
		 	margin-left: 60px;
		 	margin-top: 5px;
		 	font-family: sans-serif;
		 	font-size: 13x;

	  	}
		.signing{
		 	float: right;
		 	margin-right: 100px;
		 	margin-top: 5px;
		 	font-family: sans-serif;
		 	font-size: 13x;
		 }
		  .underline{
		 	background: grey;
		 	height: 1px;
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
	</style>
	<!--Contacts-->
	<div class="cotactsAndSignin">
		<a href="tel:8668289688" id="call"><i class="fa fa-phone"></i>866-828-9688</a><span> | </span>
		<a href="mailto:support@moverzfax.com"><i class="fa fa-envelope"></i>support@moverzfax.com</a>
	</div>
	<div class="signing">
		<a href="signin.php">Sign In</a><span>|</span><a href="mover_register.php">Sign Up</a>
	</div>
	<br>
	<br>
	<!--underlining-->
	<div class="underline">
		
	</div>
	<!--naviagtion-->
	<div class="navigation">
		<!--logo-->
		<img src="img/logo2023.jpeg" id="logo">
		<!--navigation link-->
		<div class="links">
			
			<ul>
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
						<li><a href="contact_us.php">Contact Us</a></li>
						<li><a href="support.php">Send a Message</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbardrop">More Links</a>
					<ul>
						<li><a class="dropdown-item" href="blog.php">Blog</a></li> 
						<li><a class="dropdown-item" href="link_to_us.php">Link to us</a></li> 
						<li><a class="dropdown-item" href="#">Promotional Video</a></li>
						<li><a class="dropdown-item" href="#">Testimonials</a> </li>
						<li><a class="dropdown-item" href="#">Video Testimonials</a></li>

					</ul>
				</li>
			</ul>
		</div>
	</div>
	<hr>
</body>
</html>