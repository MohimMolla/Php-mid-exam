<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="discount.php" method="post">
		<input type="text" name="value">		
		<input type="submit" value="Calculat">
	</form>
	<?php 
	function shop($bdt){
		if($bdt>5000){return $bdt*0.10;}
		else{return $bdt*0;};
	}
	$shop=$_POST["value"];
	$result=shop($shop);
	echo "Seles amount :".$shop."<br>"."Discount amount : $result"."<br>"."Payed amount ".  $shop-$result;
	; 
    ?>
	
</body>
</html>