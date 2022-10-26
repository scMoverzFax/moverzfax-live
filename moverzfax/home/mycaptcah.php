		<?php
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
					 $answer = $first_number - $second_number;
					 case "*": 
					 $answer = $first_number * $second_number;
		}
		$_SESSION['answer'] = $answer;

	?>
