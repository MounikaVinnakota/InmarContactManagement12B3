<?php
$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['Email'];
$name=$_POST['name'];
$email=$_POST['cemail'];
$phone=$_POST['phone'];
$gname='NULL';
$gid='NULL';

$sql = "INSERT INTO contactslist(name,cemail,phoneno,ownermail,groupname,groupid) VALUES ('$name', '$email','$phone','$myemail','$gname','$gid')";


if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
echo 'alert("Contact added successfully");'; 
echo 'window.location.href = "dashboard.html";';
echo '</script>';
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

