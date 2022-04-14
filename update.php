<?php

include "config.php";
if (isset($_POST['update'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "UPDATE `visitkort` SET `first_name`='$firstname',`last_name`='$lastname',`phone`='$phone',`email`='$email' WHERE 'firstname' = '$firstname'";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h1>Update Form</h1>
<form action="" method="POST">
        <fieldset>
            <legend>Person Information</legend>
            first name: <br>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
            <br>
            last name: <br>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
            <br>
            phone: <br>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
            <br>
            email: <br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            
            <input type="submit" name="submit" value="Update">
        </fieldset>
    </form>
</body>
</html>
