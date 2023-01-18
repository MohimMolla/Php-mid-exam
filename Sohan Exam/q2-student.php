<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="" method="post">
		ENTER STUDENT ID :<input type="text" name="stid"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	class student
	{
		public $id;
		public $name;
		public $batch;

		function __construct($id, $name, $batch)
		{
			$this->id = $id;
			$this->name = $name;
			$this->batch = $batch;
		}
		public function result($id)
		{
			$students = file("student.txt");
			$findarr = false;

			foreach ($students as $line) {
				$data = explode(",", $line);
				if ($data[0] == $id) {
					$findarr = false;
					echo "Student id : $data[0] <br>";
					echo "Student name : $data[1] <br>";
					echo "Student Batch : $data[2] <br>";
					break;
				} else {
					$findarr = true;
				}
			}
			if ($findarr) {echo "$id didn't Found in students File!";}
		}
	}
	if (isset($_POST["submit"])) {
		$stid = $_POST["stid"];
		$student = new student(1, "Mohim", 53);

		$student->result($stid);
	}
	?>
</body>

</html>