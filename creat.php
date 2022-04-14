<?php
    include "config.php";
    if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `visitkort`(`first_name`, `last_name`, `phone`, `email`) VALUES ('$firstname','$lastname','$phone','$email')";
        $result = $conn->query($sql);
        if ($result == TRUE){
            echo "created successfully..";
        }else{
            echo "Error";
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat</title>
    <h1>Creat Form</h1>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Person Information</legend>
            first name: <br>
            <input type="text" name="firstname">
            <br>
            last name: <br>
            <input type="text" name="lastname">
            <br>
            phone: <br>
            <input type="text" name="phone">
            <br>
            email: <br>
            <input type="email" name="email">
            <br>
            
            <input type="submit" name="submit" value="Creat">
        </fieldset>
    </form>
</body>
</html>