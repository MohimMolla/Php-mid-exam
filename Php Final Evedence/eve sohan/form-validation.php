<?php 
    if(isset($_POST['submit'])){

        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];


        // $errMsg = [];
        // $err = false;
        


        if(strlen($uname ) < 4 || strlen($uname ) > 8){
            echo "User name must be contain 4 to 8 character"."<br>";
        }else{
           echo "User Name is correct "."<br>";
        }


        if(filter_var($uemail,FILTER_VALIDATE_EMAIL)){
            echo "Email Valid";
        }else{
            echo "Please Enter Valid Email";
        }







    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="uname" placeholder="Write a user name" id="">
        <br>
        <input type="text" name="uemail"  placeholder="Write a email" id="">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>