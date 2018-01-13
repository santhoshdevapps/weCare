<?php


//include_once('Connection.php');

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




header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Cache-Control: no-cache");

$data = json_decode(file_get_contents("php://input"));
// $username =mysqli_real_escape_string($GLOBALS['conn'],$data->username);
// $pswd =mysqli_real_escape_string($GLOBALS['conn'],$data->pswd);





 $sql = "SELECT ID,Span_COLOR,Background_COLOR,Text_COLOR FROM Dynamic_Demo";        
        
 $result = mysqli_query($GLOBALS['conn'],$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      
      $count = mysqli_num_rows($result);
	  
	  
	  
	 	
      
     
        
           $LOGIN['ID']=$row["ID"];
           $LOGIN['Span_COLOR']=$row["Span_COLOR"];
		   $LOGIN['Background_COLOR']=$row["Background_COLOR"];
		   $LOGIN['Text_COLOR']=$row["Text_COLOR"];
		  
           
            

$Login_output=json_encode($LOGIN);

echo $Login_output;



        




?>