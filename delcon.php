<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
$email=$_POST['email'];

$sql = "DELETE FROM contactslist WHERE cemail='$email'";


if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
echo 'alert("Contact deleted successfully");'; 
echo 'window.location.href = "dashboard.html";';
echo '</script>';
/*echo "Contact added successfully";
    header("Location:dashboard1.html");*/
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

