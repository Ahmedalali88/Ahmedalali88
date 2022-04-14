<?php
    include "config.php";

    if(isset($_GET['phone'])){
        $phone = $_GET['phone'];
        $sql =  "DELETE FROM `visitkort` WHERE 'phone' = '$phone'";
        $result = $conn->query($sql);
        if ($result == TRUE){
            echo "deleted successfully..";
        }else{
            echo "Error";
        }
    }

?>