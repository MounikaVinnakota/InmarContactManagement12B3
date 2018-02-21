<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inmar";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mail1=$_POST['email'];
$passwd1=$_POST['pass'];
$mail2="";
$passwd2="";

  // echo "$mail1    $passwd1";

$sql = "SELECT Email,Password FROM persons where Email='$mail1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mail2=$row["Email"];
      $passwd2=$row["Password"];
      //echo "$mail2  $passwd2";
      }
} 
else {

    echo "0 results";
}
//echo "<br>$mail2   $passwd2";
   if(($mail1==$mail2)&&($passwd1==$passwd2))
   {
       setcookie("test","x" ,time() + (86400 * 30), "/");
       setcookie("Email",$mail2, time() + (86400 * 30), "/");
       //echo "<h1>This is fine</h1>";
       header("Location:index.php");
   }
   else
   {
        header("Location:login.html");
        //echo '<script type="text/javascript">alert("wrong username or password");</script>';
   }
$conn->close();
?>
