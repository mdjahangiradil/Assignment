<? php
include_once('connection.php');
$query="select * from usertable";
$result=mysql_query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
    <table>
        <tr>
            <th> <h2>Name</h2></th>
            <th> <h2>Email</h2></th>
            <th> <h2>Phone</h2></th>
           </tr>
           <?php while ($rows=mysql_fetch_assoc($result));

        ?>
        <tr>
            <td> <?php echo $rows['name']; ?> </td>
            <td> <?php echo $rows['email']; ?> </td>
            <td> <?php echo $rows['mobile']; ?> </td>
            
        </tr>
         
     <?php   
              
?>
        
    </table>
    
    
</body>
</html>