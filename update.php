<?php 

include "./php/config.php";
include "./php/update.php";


$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Pages</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        
        <form action="index.php" method="post">
            <input type="submit" value="Logout" name="update">
        </form>
        <form action="./php/update.php" method="post">
            <input type="submit" value="Edit" name="update">
        </form>
</br></br><h2>User Update</h2>
        <form name="form" action="./php/update.php" onsubmit="return isvalid()" method="POST">
                
        <input type="text" id="user" name="user" placeholder="" required></br></br>
                
        <input type="password" id="pass" name="pass" placeholder="" required></br></br>
        <input type="submit" value="Update" name="update">
            </form>
            

       
       
        

</html>