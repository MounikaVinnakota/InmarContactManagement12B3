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
      margin-left: 400px;
      width: 10%;
      height:10%;
    background-color: black;
    color: white;
    padding: 10px 10px;
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
  window.location.href='dashboard.html';
}

</script>";

$conn =mysqli_connect('localhost','root','','inmar');
$myemail=$_COOKIE['Email'];

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 

$sql = "SELECT * FROM groupsdata where ownermail='$myemail'";

$result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "<table border='10'>";
      
    while($row = $result->fetch_assoc()) {
      $v=$row['groupid'];
      echo "<tr>";
      echo "<th>".$row['groupname']."</th>";
      echo "<th>".$row['groupid']."</th>";
      echo "</tr>";

    $sql1 = "SELECT name,cemail,phoneno FROM contactslist where ownermail='$myemail' and groupid='$v'";
    $result1 = $conn->query($sql1);
    while ($row1 = $result1->fetch_assoc()) {
                          
                          echo "<tr>";
      echo "<td>".$row1['name']."</td>";
      echo "<td>".$row1['cemail']."</td>";
      echo "<td>".$row1['phoneno']."</td>";
      echo "</tr>";

          }      
      
    }
    echo "</table>";
    echo "<br>";
} 

 
else {
    echo "No groups in your database";
    echo "<br>";
  }
echo "<input type='button' class='button' name='OK' value='OK' onclick='fu()'/>";

$conn->close();
?>
</body>
</html>

