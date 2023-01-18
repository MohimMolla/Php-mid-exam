<?php
if (isset($_POST["submit"])) {
	$img = $_FILES["file"];
	$limit = 400 * 1024;
	// var_dump($img);
	$alowed = ["image/jpeg", "image/jpg", "image/png", "application/pdf", "application/", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];

	if (in_array($img["type"], $alowed)) {
		if ($img["size"] < $limit) {
			move_uploaded_file($img["tmp_name"], "file/". $img["name"]);
			echo "Upload successfully";
		} else {
			echo "File is too large";
		}
	}
	else{
		echo "File is not supported";
	}
}
?>
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
		<input type="file" name="file"> <br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>

</html>