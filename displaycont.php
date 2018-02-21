<!DOCTYPE html>
<html>
<head>
  <title>Inmar CMS</title>
  <style type="text/css">
    table{
      margin-left: 400px;
      font-size: 25px;
    }
    .button
    {
        margin-left: 480px;
      width: 20%;
  height:10%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    font-size: 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
    </style>
</head>
<body>

<?php
echo "<script language='javascript'>

function fu(){
  window.location.href='dashboard.html'
}

</script>";


$conn =mysqli_connect('localhost','root','','inmar');
$myemail=$_COOKIE['Email'];

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 

$sql = "SELECT * FROM contactslist where ownermail='$myemail'";

$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    	echo "<table border='10'>
      <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phoneno</th>
      </tr>";
      
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['cemail']."</td>";
      echo "<td>".$row['phoneno']."</td>";
      echo "</tr>";
      
      
    }
    echo "</table>";
    echo "<br>";
} 
 
else {
    echo "No contacts in your databse";
    echo "<br>";
}
echo "<input type='button'  class='button' name='OK' value='OK' onclick='fu()'/>";

$conn->close();
?>

</body>
</html>
