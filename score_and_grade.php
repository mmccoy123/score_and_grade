<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Score and Grade</title>
</head>
<body>
	<?php

	for ( $i = 1 ; $i <= 100 ; $i++ ) {
		$score = rand(50,100);

		switch (true) {
			case $score < 70:
				echo "<h1>Your Score: $score</h1>";
				echo "<h2>Your grade is D.";
				break;

			case $score < 80:
				echo "<h1>Your Score: $score</h1>";
				echo "<h2>Your grade is C.";
				break;
			
			case $score < 90:
				echo "<h1>Your Score: $score</h1>";
				echo "<h2>Your grade is B.";
				break;

			default:
				echo "<h1>Your Score: $score</h1>";
				echo "<h2>Your grade is A.";
				break;
		}
	}

	?>
</body>
</html>