<?php
include_once "connect.php";

if (isset($_GET['drop'])) {
    $id = $_GET['drop'];
    $id = mysqli_real_escape_string($conn, $id);

    $delete_query = "DELETE FROM sagnebi WHERE s_id = '$id'";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        header("Location: http://localhost/PHP/abgd/?nav=sagani");
        exit();
    }
} else {
    echo "No ID specified for deletion.";
}
?>
