<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		File Upload :<br> <input type="file" name="file"> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	if (isset($_POST["submit"])) {
		$img = $_FILES["file"];
		$limit = 400 * 1024;

		$alowed = ['application/pdf', 'application/msword', 'image/webp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png'];
	// 	if (in_array($img["type"], $alowed)&& $img=$limit) {
	// 		// if ($img["size"] < $limit) }
	// 			move_uploaded_file($img["tmp_name"],"file/".$img["name"]);
	// 			echo " Upload Success";
	// 		}
	// 		//  else {
	// 		// 	echo " File is too large";
	// 		// }
	// 	 else {
	// 		echo "File type is not Support";
	// 	}
	// }
	if(in_array($img['type'],$alowed) && $limit ){
		move_uploaded_file($img['tmp_name'],"file/".$img['name']);
		echo "Upload success!!"; 
	 }
	 else{
		 echo  "check type and size";
	 }
	}
	
	

	?>
</body>

</html>