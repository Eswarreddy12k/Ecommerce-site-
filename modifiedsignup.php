<?php    
    
include "signupconnection.php";    
    
  
    
$sql = "select * from signup";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>      
                <td>Name</td> 
                <td>Email</td>          
                <td>Password</td>        
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    
<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->name;?>  
        </td>  
        <td>  
            <?php echo $row->email;?>  
        </td>  
        <td>  
            <?php echo $row->password;?>  
        </td>  
        
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?> 