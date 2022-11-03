<?php include_once 'myheader.php';
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
$id = $_GET['id'];
$usdot = $_GET['usdot'];
?>
<title>Add Review</title>
<script type="text/javascript">
	function refreshCaptcha() {
		img = document.getElementById("capt");
		img.src = "captcha.php?rand_number=" + Math.random();
	}
</script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	* {
		font-family: sans-serif;
		box-sizing: border-box;
	}

	.b-container {
		overflow: hidden;
		height: fit-content;
		width: fit-content;
		position: relative;
		padding: 50px;
		max-width: 1440px;

	}

	.in-container {
		background-color: white;
		box-shadow: 0 0 10px 2px #eee;
		/* border-radius: 10px 10px; */
		border: 1px solid #eee;
		/* width: fit-content; */
		padding: 50px;
	}

	.bg-form {
		margin: 0;
		/* width: 1100px; */
		background-color: white;
	}

	.i-width {
		width: 100%;
	}

	.row .button-mf {
		font-size: 15px;
		color: #fff;
		background-color: #85CA63;
		border-radius: 5px 5px;
		width: 150px;
		border-color: none;
		transition: all .5s;
	}

	.row .button-mf:hover {
		background-color: #67bd3c;
		border-color: #55bd1a;
		color: #fff;
		border-radius: 10px;
		width: 200px;
		transition: all .5s;

	}

	.row .button-mf-cancel {
		font-size: 15px;
		color: #fff;
		border-radius: 5px 5px;
		width: 150px;
		background-color: #dc3545;
		border-color: #dc3545;
		transition: all .5s;
	}

	.row .button-mf-cancel:hover {
		color: #fff;
		border-radius: 10px;
		width: 200px;
		transition: all .5s;
		background-color: #c82333;
		border-color: #bd2130;

	}

	textarea {
		height: 100px;
		font-family: cursive;
	}

	.text-center {
		overflow: hidden;
	}

	/* Desktop-mobile approach --------------------------------------------------------------*/

	/* smaller than Desktop HD */
	@media (max-width: 1200px) {}

	/* smaller than desktop */
	@media (max-width: 1000px) {}

	/* smaller than tablet */
	@media (max-width: 750px) {}

	/* smaller than phablet (also point when grid becomes active) */
	@media (max-width: 550px) {}

	/* smaller than mobile */
	@media (max-width: 400px) {}
</style>


<!-- Start of Document ----------------------------------------------->

<div class="b-container">
	<div class="container in-container slide-in-bottom">
		<div class="bg-form form-group">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Add Reviews</h2>
					<hr>

					<form action="../model/addReview.php" method="POST">
						<?php include "../model/add_review_model.php" ?>
					</form>
					<hr>
				</div>

			</div>
			<br><br>
			<div class="text-center">
				<div class="col-sm-12"><img style="width: 100%;" src="../img/CAPTURE2.png"></div>
			</div><br>
		</div>
	</div>
</div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->


<br><br>
<?php include 'footer.php'; ?>