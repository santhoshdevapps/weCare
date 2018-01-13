<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB"; 

//$host="mysql7.000webhost.com";
//$user="a8730507_root";
//$password="password123"; 

// Create connection
//$conn =mysqli_connect($host,$user,$password,a8730507_myDB);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id =$_POST['ID'];

$Span_COLOR =$_POST['Span_COLOR'];
$Background_COLOR =$_POST['Background_COLOR'];
$Text_COLOR =$_POST['Text_COLOR'];


$sql = "update Dynamic_Demo set Span_COLOR='$Span_COLOR',Background_COLOR='$Background_COLOR',Text_COLOR='$Text_COLOR' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
  //  echo "Record updated successfully"; Checking for the error
	
	include("Dynamic.html");
	
} else {	
    echo "Error updating record: " . $conn->error;
}

$conn->close();
	  
	  ?>