<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		include_once 'myheader.php';
	?>
</head>
<body>

	<style type="text/css">
		.filterBy{
			width: 100%;
			/*display: flex;*/
			height: 450px;
		}
		.filterBy li{
			display: inline;
			margin-left: 30px;
			border: 1px solid grey;
			padding-left: 20px;
			padding-right: 20px;
			background-color: green;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		.filterBy ul li a{
			color: white;
		}
					 
					.button, #close{
						/*position: absolute;*/
						float: left;
						right: -5px;
						top: 0;
						/*width: 70px;*/
						background-color: green;
						color: #fff;
						font-size: 15px;
						outline: none;
						border:none;
						font-weight: normal;
						height: 32px;
						padding-right: 20px;
						margin-top: 10px;
						
					}
					.button i{
						color:white;
						font-size: 15px;
						font-weight: normal;
						padding-left: 20px;
						padding-right: 15px;
					}
					

	</style>
	<div class="filterBy">
		<ul>
			<li><a href="find_a_mover.php">Search by Company Name</a></li>
			<li><a href="SearchByIntial.php">Search by Intial</a></li>
		</ul>
		<br>
		<br>
			<style type="text/css">
				.filterForm{
					margin-left: 60px;
					margin-right: 60px;
				}
				.filterForm #searchbyName #CompanyName{
					width: 50.5%;
					padding-left: 20px;
					margin-left: 20px;
					margin-bottom: 20px;
				}
				input, select{
					border: 1px grey solid;
				}
				.filterForm #searchbyName .firstRow{
					float: left;
					width: 50.5%;
					border: 1px solid green;
					height: 300px;
					padding: 50px;
					align-content: center;
					justify-content: center;
					margin-left: 340px;
				}
				.filterForm #searchbyName .firstRow select, .filterForm #searchbyName .secondRow input, .filterForm #searchbyName .secondRow select{
					width: 100%;
				}

			</style>

		<div class="filterForm">
			<form align="center" id="searchbyName">
				<label class="labels">Company Name</label>
				<input type="text" name="CompanyName" id="CompanyName" placeholder="Company Name ...">
				<br>
				<div class="firstRow">
					<label id="labels">Country</label>
					<select name="country">
						<option value=""></option>
						<option value="United States">United States</option>
						<option value="Canada"> Canada </option>
					</select><br>
					<label id="labels">State</label>
					<select name="state">
						<option value=""></option>
		                <option value="AL">Alabama</option>
		                <option value="AK">Alaska</option>
		                <option value="AZ">Arizona</option>
		                <option value="AR">Arkansas</option>
		                <option value="CA">California</option>
		                <option value="CO">Colorado</option>
		                <option value="CT">Connecticut</option>
		                <option value="DE">Delaware</option>
		                <option value="FL">Florida</option>
		                <option value="GA">Georgia</option>
		                <option value="HI">Hawaii</option>
		                <option value="ID">Idaho</option>
		                <option value="IL">Illinois</option>
		                <option value="IN">Indiana</option>
		                <option value="IA">Iowa</option>
		                <option value="KS">Kansas</option>
		                <option value="KY">Kentucky</option>
		                <option value="LA">Louisiana</option>
		                <option value="ME">Maine</option>
		                <option value="MD">Maryland</option>
		                <option value="MA">Massachusetts</option>
		                <option value="MI">Michigan</option>
		                <option value="MN">Minnesota</option>
		                <option value="MS">Mississippi</option>
		                <option value="MO">Missouri</option>
		                <option value="MT">Montana</option>
		                <option value="NE">Nebraska</option>
		                <option value="NV">Nevada</option>
		                <option value="NH">New Hampshire</option>
		                <option value="NJ">New Jersey</option>
		                <option value="NM">New Mexico</option>
		                <option value="NY">New York</option>
		                <option value="NC">North Carolina</option>
		                <option value="ND">North Dakota</option>
		                <option value="OH">Ohio</option>
		                <option value="OK">Oklahoma</option>
		                <option value="OR">Oregon</option>
		                <option value="PA">Pennsylvania</option>
		                <option value="RI">Rhode Island</option>
		                <option value="SC">South Carolina</option>
		                <option value="SD">South Dakota</option>
		                <option value="TN">Tennessee</option>
		                <option value="TX">Texas</option>
		                <option value="UT">Utah</option>
		                <option value="VT">Vermont</option>
		                <option value="VA">Virginia</option>
		                <option value="WA">Washington</option>
		                <option value="WV">West Virginia</option>
		                <option value="WI">Wisconsin</option>
		                <option value="WY">Wyoming</option>
		                <option value="DC">District of Columbia</option>
		                <option value="AB">Alberta</option>
		                <option value="BC">British Columbia</option>
		                <option value="MB">Manitoba</option>
		                <option value="NB">New Brunswick</option>
		                <option value="NL">New Foundland</option>
		                <option value="NT">NorthWest Territories</option>
		                <option value="NS">Nova Scotia</option>
		                <option value="ON">Ontario</option>
		                <option value="PE">Prince Edward Island</option>
		                <option value="QC">Quebec</option>
		                <option value="SK">Saskatchewan</option>
		                <option value="YT">Yukon</option>
		                <option value="NU">Nunavut</option>
					</select><br>
					<label id="labels"> City </label>
					<select name="city">
						<option value=""></option>
					</select><br>
					<button type="submit" class="button" name="submit"><i class="fa fa-search"></i>Search</button>
				</div>
				<!--<div class="secondRow">
					<label id="SortBy">Sort By</label>
					<select name="sortby">
		                <option value="">Sort By</option>
		                <option value="local">Local Mover</option>
		                <option value="long_distance">Long Distance Mover</option>
		                <option value="cross_border">Cross-Border to Canada</option>
					</select><br>
					<label id="labels"> MCDOT# </label>
					<input type="text" name="mcdot#">
					<button type="submit" class="button" name="submit"><i class="fa fa-search"></i>Search</button>
				</div>-->
				<div class="searchComp">
					
				</div>
			</form>
		</div>
	</div><br>

	<hr>
	<?php
		include_once 'footer.php';
	?>
</body>
</html>