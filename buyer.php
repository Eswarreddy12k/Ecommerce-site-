<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="style.css">
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.click{
    background: green ;
    color: honeydew;
    padding: 8px 30px;
    margin: 30px 680px;
    border-radius: 10px;
    font-size: 20px;
    transition: background 0.4s;
}
.click:hover{
    background: aqua;
}
.r{
    position: absolute;
    padding-left: 350px;
    padding-top: 32px;
    margin-right: 100px;
}

</style>
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
                    <li><a href="index.html">Home</a></li>
                        <li><a href="addproduct.html">Add Products</a></li>
                        <li><a href="dashboard.php">DashBoard</a></li>
                        <li><a href="uservices.html">Services</a></li>
                        <li><a href="mailto:farmersgate@gmail.com">Contact us</a></li>
            
                    </ul>
                </nav>
                <div class="signup">
                    <a href="signin.html"><img alt="Qries" src="img/signup.jpg"></a>
                </div>
            </div>
            <div class="r">
                <h2>To Upload Requirement</h2>
            </div>
            <div class="click">
                <a href="requirement.html" >Click Here</a>
            </div>
            
            
            <section>
            <?php
        $conn=mysqli_connect("localhost","root","","test");
        $sql="select * from buyer order by indexx desc";
        $result=$conn->query($sql);
        
        ?>
                <h1>Recent Uploads</h1>
                <table>
                    <tr>
                        <th>Buyer Name</th>
                        <th>Product Name</th>
                        <th>Phone No</th>
                        <th>Budget</th>
                        <th>Location</th>
                        <th>Amount</th>
                        
                    </tr>
                    <?php
                        while($rows=$result->fetch_assoc())
                        {
                     ?>
                    <tr>
                        <td><?php echo $rows['bname'];?></td>
                        <td><?php echo $rows['pname'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['description'];?></td>
                        <td><?php echo $rows['location'];?></td>
                        <td><?php echo $rows['amount'];?></td>
                    
                        
                    </tr>
                    <?php
                        }
                     ?>
                </table>
            </section>
            
        </body>
</html>