<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
$sql= "INSERT INTO `contact jds` (`name`, `email`, `message`)
if(!empty($name),!empty($email),!empty($message))

{     
$servername = "localhost";
$username = "anthorrohit";
$password = "sumsung420";
}
echo(please fill the section)


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>