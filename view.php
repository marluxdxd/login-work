<?php 

include "config.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>User</h2>
        <form action="index.php" method="post">
            <input type="submit" value="Logout" name="update">
        </form>
       
<table class="table">

    <thead>

        <tr>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>


    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>