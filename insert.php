<?php
   $ name=$_post('name');
   $email=$_post('email');
   $mess=$_post('mess');

   if(!empty($name),!empty($email),!empty($mess))
   {
   	echo"it is empty"
   }
   $host="localhost";
   $dbusername="anthorrohit"
   $dbpassword="sumsung420"
   $dbname="anthorrohit"

   // Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
   }