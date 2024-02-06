<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed due to some errors".mysqli_connect_error());
}
echo "sucessful connection to database";

$name=$_POST['name'];
$email=$_POST['email'];
$DOB=$_POST['DOB'];
$AUID=$_POST['AUID'];
$ph=$_POST['ph'];
$desc=$_POST['desc'];

$sql="INSERT INTO `first`.`details` (`sno`, `name`, `email`, `dob`, `aadhar`, `phone_number`, `opinion`, `dt`) VALUES (NULL, '$name', '$email', '$DOB', '$AUID', '$ph', '$desc', current_timestamp());";
 echo $sql;
if ($con->query($sql) == true)
{
  echo"sucesfully inserted";  
} else {
echo "error: $sql <br> $con->error";  
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE FORM</title>
    <style>
        h1{
            background-color: black;
            color: cyan;
            text-align: center;
            align-items: center;
            font-size: small;
        }
        
    </style>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Play&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">

<h1><i>welcome to the website!</i></h1>  
<h5>enter your details here!</h5>
<form action="index.php" method="post">
    <label> Name</label><br>
    <input type="text" name="name" placeholder="enter your name here"><br>
<br>
    <label1>Email</label1><br>
    <input type="text" name="email" placeholder="enter your Email here">
<br>
<br>
<label2>Date Of Birth</label2><br>
<input type="text" name="DOB" placeholder="enter your date of birth here"><br><br>

<label3>Rate this Website</label3><br>
<input type="text" name="AUID" placeholder="enter rating"><br><br>


<label4>Year</label4><br>
<input type="text" name="ph" placeholder="enter year world cup site to be done"><br><br>

<label5>Opinion</label5><br>
<textarea type="text" name="desc" cols="30" rows="10" placeholder="Your opinion matters"></textarea>

<button>submit</button>





</form>
</body>
</html>
