<!DOCTYPE html>
<html>
<head>
	<title>1부터 30까지의 합과 곱</title>
</head>
<body>
	<?php
		$n = 30;
		$sum = 0;
		$prod = 1;

		for ($i = 1; $i <= $n; $i++) {
		  echo $i . " ";
		  $sum += $i;
		  $prod *= $i;
		}

		echo "<br>";
		echo "1부터 {$n}까지의 숫자의 합계는 {$sum}입니다. <br>";
		echo "1부터 {$n}까지의 숫자의 곱은 {$prod}입니다.";
	?>
</body>
</html>