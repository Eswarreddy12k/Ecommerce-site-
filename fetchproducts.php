<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

    <div class="header">
        <div class="container"> 
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="addproduct.html">Add Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Around me</a></li>
                        <li><a href="">Contact us</a></li>
            
                    </ul>
                </nav>
                <div class="signup">
                    <a href="signin.html"><img alt="Qries" src="img/signup.jpg"></a>
                </div>
            </div>
        </div>
    </div>

    <?php
        $conn=mysqli_connect("localhost","root","","test");
        $sql="select * from np";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
            echo $row['name'];
            echo '<img height="300" width="300" src="images/'.$row['image'].'">';
        }
        

    ?>


    
</body>
</html>