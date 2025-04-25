<?php
    if(isset($_POST['add'])){
        $status = $_POST['role'];
        $query_ins = "INSERT INTO roles (status) VALUES('$status')";
        mysqli_query($conn,$query_ins);
        header("location: index.php?nav=role&action=add");
    }
?>