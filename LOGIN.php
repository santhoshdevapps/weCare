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



$sql = "SELECT ID,Span_COLOR,Background_COLOR,Text_COLOR FROM Dynamic_Demo";
$result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      
      $count = mysqli_num_rows($result);
	  
	  if($count==1){
		  echo $row['ID'];
		  echo $row['Span_COLOR'];
		  echo $row['Background_COLOR'];
		  echo $row['Text_COLOR'];
		  
	  }
	  
	  ?>
	  
	  
	  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style>
  #bor{
box-shadow: 0 0 5px black;	
background-color:#FCFFFA;
}

#form{
padding-top:250px;
}
  </style>
  
  
  </head>
<body>


<div class="container">

  
  <form role="form" ID="form"  role="form" method="post" action="update.php">
  
  <div class="col-lg-12" id='bor'>
  
  <div class="form-group">
      <label for="Name">id:</label>
      <input type="id" class="form-control" id="id" name='ID' placeholder="Enter name" readonly="readonly" value='<?=$row['ID']?>'>
    </div>
  
    <div class="form-group">
      <label for="Name"> Span COLOUR:</label>
      <input type="name" class="form-control" id="span" name='Span_COLOR' placeholder="Enter name" value='<?=$row['Span_COLOR']?>'>
    </div>
	
	 <div class="form-group">
      <label for="Name"> Back_ground COLOUR:</label>
      <input type="name" class="form-control" id="back" name='Background_COLOR' placeholder="Enter name" value='<?=$row['Background_COLOR']?>'>
    </div>
	
	 <div class="form-group">
      <label for="Name">Text:</label>
      <input type="name" class="form-control" id="text" name='Text_COLOR' placeholder="Enter name" value='<?=$row['Text_COLOR']?>'>
    </div>
	
	
	
	   
   
    <button type="submit" class="btn btn-default">UPDATE</button>
	
	</div>
  </form>
</div>

</body>
</html>
	  
	  
	  

