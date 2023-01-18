<?php
if (isset($_POST["submit"])) {
	class student
	{
		public $ID;
		public $NAME;
		public $BATCH;
		public $Filearr;
		
		public function __construct()
		{
			$this->Filearr = file("student.txt");
		}
		function result($ID)
		{
			foreach ($this->Filearr as $line) {
				$parts = explode(",", $line);
				if ($parts[0] == $ID) {
					echo "Student ID :" . $parts[0] . "<br>";
					echo "Student Name :" . $parts[1] . "<br>";
					echo "Student Batch" . $parts[2] . "<br>";
					break;
				}
				// else {echo  "Number is Invalid <br>" ;}
			}
		}
	}
	$s = new student();
	$s->result($_POST["value"]);
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
	<form method="post">
	Enter Number :<input type="text" name="value"><br>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>

</html>