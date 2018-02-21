<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 
$a=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['pass'];
$e=$_POST['gender'];
$f=$_POST['aadhar'];
$g=$_POST['phone'];



$sql = "INSERT INTO persons(Name,Email,Password,Gender,Aadhar,PhoneNumber ) VALUES ('$a','$c','$d','$e','$f','$g')";


if ($conn->query($sql) === TRUE) {
    echo("New record created successfully");
    //echo '<a href="index.html">BACK TO HOME PAGE</a>';
    header("location:index.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

