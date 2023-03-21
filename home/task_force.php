<?php include_once 'myheader.php'; ?><!DOCTYPE html>
<html lang="en">
<title>Special Moving Task Force</title>
<head>
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
				<h1 class="text-center" style="font-weight: 500">Special Moving Task Force Coming Soon</h1>
				<p>
				In the meantime, you can send us an email at <a href="mailto:smtf@moverzfax.com">smtf@moverzfax.com</a> and share with us your experience with a recently hired moving company that serviced you. 
				If you have dealt with a dishonest, unprofessional, unethical mover, we need to be aware and take affirmative actions towards that company. 
				Your feedback is crucial. Send us an email with Company name and USDOT number, phone number, address, state, company representative, date of move 
				and details about your experience. This way, we can contact the moving company and determine if their actions were malicious or otherwise.
				</p>
				<!-- <h1 class="text-center" style="font-weight: 500">Special Moving Task Force</h1>
				<p>Have you hired a rogue mover? Have you been cheated? HAVE your household goods been taken hostage? Is the moving company asking for 3 to 5 times more then the original estimate?</p><p>We first, on behalf of Moverzfax, wanted to say how sorry we are that you are going through this predicament and our Special Moving Task force will do everything in our power, with government authorities, to get your household items back in your hands without too much trouble.</p><p>This special task force can help you in many ways. First, if the mover was chosen within our network, it will be easier to track them down and take action on your behalf. Since we have most of their information, it will be easier for us to get your items back without too much negotiation on your part. It will of course, go through investigation and we will need to hear both sides of the story. It is only fair that we adopt this approach. The mover is NOT always wrong.</p><p>If the mover was selected from another source, such as the internet, newspaper, online directory etc., we will need to get most of your information with the company names as well. If you ordered the report of Moverzfax about the company and if the information provided wasn't accurate, we will work on your behalf to go after the moving company and file all the complaints to consumer affairs, rip-off report, U.S. Department of Transportation, to hopefully get the right authority to assist us in this important matter. For a fraction of the price of what law firms charge, our legal affiliates will get involved from the time of the complaint until we get favorable answers to you. We will not stop, we will not let go of the issue until we have done EVERYTHING we can to make you happy. Some assistance is available out there but not always to the benefit of the customer. We will make sure to continue contacting whoever is out there to lend a hand and get your possessions back.</p><p>Please fill in the form below. If you have chosen a company within our network, we gave you a confirmation number for your move, make sure to add that to the Confirmation # box on the form.</p><p>If you selected the mover from an outside source, add the company name in the Company name box and submit your information. We will process it and get back to you shortly.Thanks again.</p><br>
				<p style="color: #721c24; font-weight: 700">Important Notice:</p>Prior to filling the form, please contact our office at at the toll free number so we can determine if its a case that we can pursue together to resolution. If we feel it is, you can then relogin and submit the request and pay the fees.
				<form>
					<table class="table">
						<tr>
							<td>Complaint Type</td>
							<td><select class="form-control">
								<option>Mover</option>
								<option>Other</option>
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
							<td>Fax Number</td>
							<td><input type="number" class="form-control" name="" placeholder="Fax Number"></td>
						</tr>
						<tr>
							<td>Country</td>
							<td><select class="form-control">
								<option>United States</option>
								<option>Canada</option>
							</select></td>
						</tr>
						<tr>
							<td>State</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" class="form-control" name="" placeholder="House No./Street/Area"></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><input type="text" class="form-control" name="" placeholder="Zip Code"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" class="form-control" name="" placeholder="xxxxx@example.com"></td>
						</tr>
					</table>
					<p>If you represent a company, please enter your company information below.</p>
					<table class="table">
						<tr>
							<td>Company Name</td>
							<td><input type="text" class="form-control" name="" placeholder="Company Name"></td>
						</tr>
						<tr>
							<td>Company Type</td>
							<td><select class="form-control">
								<option>Carrier</option>
								<option>Freight Forwarder</option>
								<option>Broker</option>
								<option>Other</option>
							</select></td>
						</tr>
						<tr>
							<td>USDOT#</td>
							<td><input type="text" class="form-control" name="" placeholder="Enter USDOT#"></td>
						</tr>
						<tr>
							<td>DOCKET (MC) #</td>
							<td><input type="text" class="form-control" name="" placeholder="Enter DOCKET (MC) #"></td>
						</tr>
						<tr>
							<td>Complaint</td>
							<td><textarea class="form-control" placeholder="Describe in brief"></textarea></td>
						</tr>
					</table>
					<p style="color: #721c24; font-weight: 700">MOVE SUMMARY / DETAILS :</p>You must fill all the required fields. * indicates required fields. If your city is not listed in our collection, please select nearest location or enter them manually.
					<table class="table">
						<tr>
							<td>Confirmation #</td>
							<td><input type="text" class="form-control" name="" placeholder="Confirmation #"></td>
						</tr>
						<tr>
							<td>Company Name</td>
							<td><input type="text" class="form-control" name="" placeholder="Company Name"></td>
						</tr>
					</table>
					<p>Please indicate the date and address where the move originated</p>
					<table class="table">
						<tr>
							<td>Pickup Date</td>
							<td><input type="date" class="form-control" name=""></td>
						</tr>
						<tr>
							<td>Country</td>
							<td><select class="form-control">
								<option>United States</option>
								<option>Canada</option>
							</select></td>
						</tr>
						<tr>
							<td>State</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" class="form-control" name="" placeholder="House No./Street/Area"></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><input type="text" class="form-control" name="" placeholder="Zip Code"></td>
						</tr>
					</table>
					<p>Please indicate the date and address where the move is destined to arrive.</p>
					<table class="table">
						<tr>
							<td>Delivery Date</td>
							<td><input type="date" class="form-control" name=""></td>
						</tr>
						<tr>
							<td>Country</td>
							<td><select class="form-control">
								<option>United States</option>
								<option>Canada</option>
							</select></td>
						</tr>
						<tr>
							<td>State</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="form-control">
								<option></option>
							</select></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" class="form-control" name="" placeholder="House No./Street/Area"></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><input type="text" class="form-control" name="" placeholder="Zip Code"></td>
						</tr>
					</table>
					<p>For as low as 99$ (BEST VALUE EVER), we will do everything for you from investigation to resolving your issues. Taking all the hazzles out from your hand.</p>
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
								<td><input type="submit" class="btn btn-success" name="" value="Checkout With Paypal"></td>
							</tr>
					</table>
				</form>-->
			</div>
			
		</div><!--<hr>
		<div class="row text-center">
			<div class="col-sm-12"><img src="../img/CAPTURE2.png"></div>
		</div><br> -->
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>