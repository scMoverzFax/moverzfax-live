<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		session_start();
		$first_number = rand(1, 10);
		$second_number = rand(1, 10);

		$operators = array("+", "-", "*");
		$operator = rand(0, count($operators) -1 );
		$operator = $operators[$operator];

		$answer = 0;
		switch ($operator) {
			case "+":
				// code...
			$answer = $first_number + $second_number;
				break;
				case "-":
					 $answer = $first_number -$second_number;
					 case "*": 
					 $answer = $first_number * $second_number;
		}
		$_SESSION['answer'] = $answer;
	?>

	<form method="POST" action="process.php">
		<?php
			echo $first_number . " " .$operator . " " . $second_number;

		?>
		<input type="number" name="answer">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>