<?php
    include("connect.php");

    $mesid = $_GET["mesid"];
    $del = mysqli_query($con,"delete from message where mesId = '$mesid' ");
    if ($del) {
        header("location:message.php");
    }


    $ap_id = $_GET["ap_id"];
    $del = mysqli_query($con,"delete from apply where apId = '$ap_id' ");
    if ($del) {
        header("location:app.php");
    }

    
    $us_id = $_GET["us_id"];
    $del = mysqli_query($con,"delete from user where uid = '$us_id' ");
    if ($del) {
        header("location:account.php");
    }
?>