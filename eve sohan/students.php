<?php 

    class Student{
        public $id;
        public $name;
        public $batch;

        function __construct($id,$name,$batch){
                $this->id = $id;
                $this->name = $name;
                $this->batch = $batch;
        }

        public function result($id){

            $students = file('students.txt');
            $findStd = false;

            foreach($students as $student){

                //101,Md Karim Mia,45
                $data = explode(',', $student);

                if($data[0] == $id){
                    $findStd = false;
                    echo "Student id: $data[0]  <br>";
                    echo "Student Name: $data[1]  <br>";
                    echo "Student Batch: $data[2]  <br>";
                    break;
                }else{
                    $findStd = true;
                }
                
            }

            if($findStd){
                echo "$id didn't Found in students File!";
            }

        }
        
    }

    if(isset($_POST['submit'])){

        $stdId = $_POST['stdId'];

        $student = new Student(101,"Md Karim",45);

        $student->result($stdId);

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Student</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="stdId" id="">
        <br>
        <input type="submit" name="submit" value="Find Student">
    </form>
    
</body>
</html>