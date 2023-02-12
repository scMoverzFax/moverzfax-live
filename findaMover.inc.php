<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<table id="collectedPrices">
		<tr>
			<th>MARKET NAME</th>
			<th>COMMODITY </th>
			<th>UNITS </th>
			<th>PRICE </th>
			<th>COLLECTION DATE</th>
		</tr>
		<?php
			$sql = "select * from collectedprice";

			$result = $conn -> query($sql);
			echo "";
			if($result-> num_rows > 0){

				while ($rows = $result->fetch_assoc()){
					echo "<tr>
						<td>".$rows["marketName"]."</td>
						<td>".$rows["COMMODITY"]."</td>
						<td>".$rows["units"]."</td>
						<td>".$rows["price"]."</td>
						<td>".$rows["collectionDate"]."</td>
					</tr>";
				}
			}
			else {
				echo "NO DATA FOUND";
			}
		?>
	</table>			
</body>
</html>