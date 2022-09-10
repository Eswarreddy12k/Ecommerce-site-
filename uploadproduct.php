<?php
$servername = "localhost";  
$username = "root";  
$password = "";  
$test='test';

$nfname=$_POST['fname'];
$ncname=$_POST['cname'];
$nlocation=$_POST['location'];
$nquantity=$_POST['quantity'];
$ncost=$_POST['cost'];
$nphoneno=$_POST['phoneno'];
$nctype=$_POST['fav_language'];

$ndescription=$_POST['description'];

date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d H:i:s');

$conn = new mysqli($servername , $username , $password, $test) or die("unable to connect to host");  




if ($conn->connect_error) {
    die('Could not connect to the database.');
}
else{
    $filename = $_FILES["myimage"]["name"];
    $tempname = $_FILES["myimage"]["tmp_name"];    
    $folder = "images/".$filename;
    move_uploaded_file($tempname, $folder);
    
    
    $sql="select count(indexx) as a from nrpx";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $count=$row['a']+1;
    }
        
    
    $sqll = "INSERT INTO nrpx(indexx,farmer_name,cname,locationx,quantity,price,phoneno,imagex,typex,descriptionx)  VALUES ($count,'$nfname','$ncname','$nlocation',$nquantity,$ncost,$nphoneno,'$filename','$nctype','$ndescription')";
    $rs = mysqli_query($conn, $sqll);

    echo "product uploaded succesfully";

    $myfile = fopen( strval($count).'.php', "w") or die("Unable to open file!");
    $new = htmlspecialchars("<!DOCTYPE html> 
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Product Details</title>
        <link rel='stylesheet' href='stylecardd.css'>
        <link rel='stylesheet' href='style.css'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css'>
    </head>
    <body>
        <div class='navbar'>
            <div class='logo'>
                <img src='img/logo.png' alt=''>
            </div>
            <nav>
                <ul>
                <li><a href='index.html'>Home</a></li>
                <li><a href='addproduct.html'>Add Products</a></li>
                <li><a href='dashboard.php'>DashBoard</a></li>
                <li><a href='uservices.html'>Services</a></li>
                <li><a href='mailto:farmersgate@gmail.com'>Contact us</a></li>
        
                </ul>
            </nav>
            <div class='signup'>
                <a href='signin.html'><img alt='Qries' src='img/signup.jpg'></a>
            </div>
        </div>
        <div class='rowz'>
            <div class='productimg'>
                <img height='200' width='300' src='$folder' alt=''>
                <h4>$ncname</h4>
                        <div class='wishlist'>
                            <a href=''>+ Add to wishlist</a>
                        </div>
                        <p>Rupees $ncost /KG</p>
            </div>
            <div class='productdesc'>
                <h2>Description</h2>
                
    
            </div>
            <div class='content'>
                <h4>$ndescription</h4>
            </div>
            <div class='contactdetails'>
                <h3>To order in bulk contact:</h3>
            </div>
            <div class='mobile'>
                <a href=''>$nphoneno</a>
            </div>
            <div class='fname'>
                <h3>Farmer Name</h3>
                <h4>$nfname</h4>
            </div>
            <div class='timex'>
                <h3>Time Uploaded</h3>
                <h4>$date</h4>
            </div>
            <div class='locationx'>
                <h3>Location</h3>
                <h4>$nlocation</h4>
    
            </div>
            <div class='quantity'>
                <h3>Quantity</h3>
                <h4>$nquantity kg</h4>
            </div>
            
    
        </div>
        <div class='footerx'>
            <div class='containerx'>
                <div class='rowx'>
                    <div class='fc1x'>
                        <h3>Download our app</h3>
                        <p>Supported on Android and Ios</p>
                    </div>
                    <div class='fc2x'>
                        <img src='img/logo.png' alt=''>
                    </div>
                    <div class='fc22x'>
                        <h3>FarmersGate</h3>
                        <p>Uniting Farmers and Buyers</p>
                    </div>
                    <div class='fc3x'>
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </body>", ENT_QUOTES);
    
    $newx='<?php
    $str =\''.strval($new).'\';echo html_entity_decode($str);
    ?>';
    fwrite($myfile, $newx);
    
    fclose($myfile);
         
        
    $conn->close();

}


?>