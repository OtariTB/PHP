<?php
include_once "connect.php";

if(isset($_GET['sAdd'])){
    $sagani = $_GET['sAdd'];
    $addquery = "INSERT INTO sagnebi (status) VALUES('$status')";
}
?>