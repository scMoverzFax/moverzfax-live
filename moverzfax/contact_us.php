<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'myheader.php'; ?>
	<script type="text/javascript">
		function refreshCaptcha(){
			img = document.getElementById("capt");
			img.src="captcha.php?rand_number=" + Math.random();
		}
	</script>
</head>

<body>
	<div class="container" style="margin-top:10px; max-width: 100%">
		<div class="row text-justify">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<h1 class="text-center" style="font-weight: 500">Contact Us</h1>
				<p>If you have any questions or suggestions regarding our site services, please contact us through the given information below or you can send us your inquiries or questions directly by using our contact form.</p><p>Please include your name, mailing address, email address, message subject and the content of your inquiry.</p>
			</div>
		</div><hr>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-3" style="background-color: #e9ecef; border-radius: 5px">
				<p style="font-weight: 500">CONTACT INFORMATION:</p>
				<p>For technical issues and concerns:
				admin@moverzfax.com</p>
				<p>For service inquiries or concerns:
				support@moverzfax.com</p>
				<p>If you want to advertise with us:
				advertise@moverzfax.com</p>
				<p>Customer support toll free:
				866-828-9688</p>
			</div>
			<div class="col-sm-5">
				<form>
					<table class="table">
						<tr>
							<td><label>Name<sup style="color: red">*</sup></label></td>
							<td><input type="text" class="form-control" name="" placeholder="Full Name" required></td>
						</tr>
						<tr>
							<td><label>Email<sup style="color: red">*</sup></label></td>
							<td><input type="email" class="form-control" name="" placeholder="xxxxx.example.com" required></td>
						</tr>
						<tr>
							<td><label>Subject<sup style="color: red">*</sup></label></td>
							<td><input type="text" class="form-control" name="" placeholder="Enter Subject" required></td>
						</tr>
						<tr>
							<td><label>Enter Your Message<sup style="color: red">*</sup></label></td>
							<td><textarea class="form-control" name="" placeholder="Enter Your Message" required></textarea> </td>
						</tr>
						<tr>
							<td></td>
							<td><input type="checkbox" name="" required> I agree to the <a href="t&c.php" target="_blank">terms of use</a></td>
						</tr>
						<tr>
							<td></td>
							<td><img name="HELPER-captcha_image" id="capt" src="captcha.php" border="0">
							<a href="javascript://" onclick="refreshCaptcha('captcha.php');">Refresh</a></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="text" name="" placeholder="Enter Captcha Code" required></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-success" name="" value="Contact Us"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-sm-2"></div>
		</div><hr>
		<div class="row text-center">
			<div class="col-sm-12"><img src="img/CAPTURE2.png"></div>
		</div><br>
	</div>
	
	<?php include 'footer.php'; ?>
</body>
</html>