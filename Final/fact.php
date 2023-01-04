<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="fact.php" method="post">
		<input type="text" name="fact">
		<input type="submit" value="Calculate">
	</form>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$num=$_POST["fact"];
		$f=1;
		for ($i=1; $i <=$num ; $i++) { 
			$f=$f*$i;
		}
		echo  "$num Factrial is" .$f;
	}
	
	
	?>
</body>
</html>