<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['Email'];
 $gid=$_POST['groupid'];
$email=$_POST['email'];

$sql1 = "UPDATE contactslist SET groupname = NULL , groupid = NULL where ownermail='$myemail' and cemail='$email'";

if ($conn->query($sql1) == TRUE) {


	echo '<script type="text/javascript">'; 
echo 'alert("Contact deleted successfully from group");'; 
echo 'window.location.href = "dashboard.html";';
echo '</script>';
/*echo "Contact added successfully";
    header("Location:dashboard1.html");*/
}
else {
    echo "Cannot update data";
}

$conn->close();
?>

