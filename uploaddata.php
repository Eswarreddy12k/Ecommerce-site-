<?php
echo 'aa';
$servername = "localhost";  
$username = "root";  
$password = "";  
$test='test';
$nname=$_POST['name'];
$nemail=$_POST['email'];
$npassword=$_POST['password'];
$conn = new mysqli($servername , $username , $password, $test) or die("unable to connect to host");  

if ($conn->connect_error) {
    die('Could not connect to the database.');
}
else{
    $stmt = $conn->prepare("insert into signup(name,email,password) values(?,?,?)");
    $stmt->bind_param("sss",$nname,$nemail,$npassword);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>