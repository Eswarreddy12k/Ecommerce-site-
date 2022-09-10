<?php
echo 'requirement uploaded succcesfully';
$servername = "localhost";  
$username = "root";  
$password = "";  
$test='test';
$nnameb=$_POST['namef'];
$nname=$_POST['name'];
$nphone=$_POST['phone'];
$nbudget=$_POST['budget'];
$nlocation=$_POST['location'];
$namount=$_POST['amount'];

$conn = new mysqli($servername , $username , $password, $test) or die("unable to connect to host");  




if ($conn->connect_error) {
    die('Could not connect to the database.');
}
else{
    $sql="select count(indexx) as a from buyer";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $count=$row['a']+1;
    }
        
    $sqll = "INSERT INTO buyer  VALUES ($count,'$nnameb','$nname',$nphone,'$nbudget','$nlocation','$namount')";
    $rs = mysqli_query($conn, $sqll);


      
}


?>