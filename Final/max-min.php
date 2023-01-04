<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="max-min.php" method="post">
		<input type="text" name="number1">
		<input type="text" name="number2">
		<input type="text" name="number3">
		<input type="submit" value="Calculat">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$number1 = $_POST["number1"];
		$number2 = $_POST["number2"];
		$number3 = $_POST["number3"];
		if ($number1 >= $number2 && $number1 >= $number3) {
			 $maxVal = $number1;
		} elseif ($number2 >= $number1 && $number2 >= $number3) {
			 $maxVal = $number2;
		}
		else{
			 $maxVal = $number3;
	
		}
		if($number1<=$number2&&$number1<=$number3){
			$minVal=$number1;
		}
		elseif($number2<=$number1&&$number2<=$number3){
			$minVal=$number2;
		}
		else{$minVal=$number3;}
		echo "Max value is $maxVal";
		echo "<br>";
		echo "Min value is $minVal";
	}
	
	
	?>
</body>

</html>