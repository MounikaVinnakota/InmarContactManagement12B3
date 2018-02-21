<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['Email'];
$gname=$_POST['gname'];
$gid=$_POST['gid'];

$sql = "INSERT INTO groupsdata(groupname,groupid,ownermail) VALUES ('$gname', '$gid','$myemail')";


if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
echo 'alert("Group created successfully");'; 
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

