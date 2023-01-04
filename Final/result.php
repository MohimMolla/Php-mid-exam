<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="result.php" method="post">
		<input type="text" name="value">		
		<input type="submit" value="Calculat">
	</form>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		function mark($num){
			$num=strtoupper($num);
			if($num=="A+"){return "Outstanding";}
			elseif($num=="A"){return "Very Good";}
			elseif($num=="B"){return "Good";}
			elseif($num=="C"){return "Poor";}
			else{return "Failed";}
		}
		$mark=$_POST["value"];
		$result=mark($mark);
	
		echo " Result:". $result;
	}
	
	?>
</body>
</html>