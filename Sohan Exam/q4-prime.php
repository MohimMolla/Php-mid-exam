<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="Q4-prime.php" method="post">
		Enter Number : <input type="text" name="prime"> <br>
		<input type="submit" name="submit" value="Calculate">
	</form>
	<?php
	if(isset($_POST["submit"])){
		$num=$_POST["prime"];

		function isPrime($n){
			for($i=2;$i<$n;$i++){
				if($n%$i===0) return false;
			} return $n>1;
		}

		if(isPrime($num)){
			echo "<h3>$num is prime Number<h3>";
		}
		else {
			echo "$num is not prime";
		}
		
	}

	?>
</body>
</html>