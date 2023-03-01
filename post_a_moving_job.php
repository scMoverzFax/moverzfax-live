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
				<h1 class="text-center" style="font-weight: 500">Post a Moving Job</h1>
				<p>If you need to Post a Moving job, this is the step to take. Contact our office and describe where and when you are moving and we will help you find the right mover. First, make sure to have a list of several USDOT number (License to operate a moving company in the USA) to choose from and we can provide you with the best mover among the one you have. It is ALWAYS important to ask for the USDOT number of the moving company who contacted you or provided you with a quote. This will let you know of their license to operate and also allow us to provide you with the detailed report on that mover. This will in return allow you to get the fact about that company and help you select the best mover that is honest and professional to service you for your relocation needs.</p><br>
				<p style="color: #721c24; font-weight: 700">Important Notice:</p>Before posting a moving job, you must read and agree with our<a href="terms_of_use.pdf" target="_blank"> TERMS OF SERVICE</a>. If your city is not listed in our collection, please select nearest location or enter them manually.
				<form>
					<table class="table">
						<tr>
							<td>Salutaion</td>
							<td><select class="form-control">
								<option>Mr.</option>
								<option>Mrs.</option>
								<option>Ms.</option>
							</select></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" class="form-control" name="" placeholder="Enter Full Name"></td>
						</tr>
						<tr>
							<td>Contact Number</td>
							<td><input type="number" class="form-control" name="" placeholder="000-000-0000"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" class="form-control" name="" placeholder="xxxxx@exapmle.com"></td>
						</tr>
						
					</table>
					<p>Please indicate the address where the move originated.</p>
					<table class="table">
						<tr>
							<td>Current Country</td>
							<td><select class="form-control">
								<option>United States</option>
								<option>Canada</option>
							</select></td>
						</tr>
						<tr>
							<td>Current State</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Current City</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Current Address</td>
							<td><input type="text" class="form-control" name="" placeholder="House No./Street/Area"></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><input type="text" class="form-control" name="" placeholder="Zip Code"></td>
						</tr>
					</table>
					<p>Please indicate the address where the move originated.</p>
					<table class="table">
						<tr>
							<td>Destination Country</td>
							<td><select class="form-control">
								<option>United States</option>
								<option>Canada</option>
							</select></td>
						</tr>
						<tr>
							<td>Destination State</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Destination City</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Destination Address</td>
							<td><input type="text" class="form-control" name="" placeholder="House No./Street/Area"></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><input type="text" class="form-control" name="" placeholder="Zip Code"></td>
						</tr>
					</table>
					<p>Please answer the following questions to receive appropriate quote based on these additional parameters.</p>
					<table class="table">
						<tr>
							<td>Date of Moving</td>
							<td><input type="date" class="form-control" name=""</td>
						</tr>
						<tr>
							<td>Size of Move (Weight)</td>
							<td><select name="move_size" id="size" class="form-control">
								<option value=""></option>
								<option value="Partial Home 500-1000 lbs">Partial Home 500-1000 lbs</option>
								<option value="Studio 1500 lbs">Studio 1500 lbs</option>
								<option value="1 BR Small 3000 lbs">1 Small Bedroom</option>
								<option value="1 BR Large 4000 lbs">1 Large Bedroom  4000 lbs</option>
								<option value="2 BR Small 4500 lbs">2 Small Bedrooms 4500 lbs</option>
								<option value="2 BR Large 6500 lbs">2 Large Bedrooms 6500 lbs</option>
								<option value="3 BR Small 8000 lbs">3 Small Bedrooms 8000 lbs</option>
								<option value="3 BR Large 9000 lbs">3 Large Bedrooms 9000 lbs</option>
								<option value="4 BR Small 10000 lbs">4 Small Bedrooms 10000 lbs</option>
								<option value="4 BR Large 12000 lbs">4 Large Bedrooms 12000 lbs</option>
								<option value="Over 12000 lbs">Over 12000 lbs</option>
							</select></td>
						</tr>
						<tr>
							<td>Looking to Transport a Vehicle?</td>
							<td>
								<input type="radio" name="transport_vehicle" value="yes">&nbsp;Yes&nbsp;&nbsp;
								<input type="radio" name="transport_vehicle" value="no" checked="">&nbsp;No
						  </td>
						</tr>
					</table>
					<table class="table text-center">
						<tr>
								<td></td>
								<td><input type="checkbox" name="" required> I agree to the <a href="terms_of_use.pdf" target="_blank">terms of use</a></td>
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
								<td><input type="submit" class="btn btn-success" name="" value="Post Job"></td>
							</tr>
					</table>
				</form>
			</div>
		</div><hr>
		<div class="row text-center">
			<div class="col-sm-12"><img src="img/CAPTURE2.png"></div>
		</div><br>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>