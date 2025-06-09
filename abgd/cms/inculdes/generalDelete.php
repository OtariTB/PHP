<?php
include_once "connect.php";

// Whitelist of allowed tables and their primary key columns
$allowed_tables = [
    'moswavleebi' => 'm_id',
    'sagnebi' => 's_id',
    'maswavleblebi' => 'mas_id',
    // Add other tables and their primary keys here as needed
];

if (isset($_GET['table']) && isset($_GET['drop'])) {
    $table = $_GET['table'];
    $id = $_GET['drop'];

    // Validate table name
    if (!array_key_exists($table, $allowed_tables)) {
        echo "Invalid table specified.";
        exit();
    }

    $column = $allowed_tables[$table];

    // Sanitize inputs
    $table = mysqli_real_escape_string($conn, $table);
    $column = mysqli_real_escape_string($conn, $column);
    $id = mysqli_real_escape_string($conn, $id);

    // Prepare delete query
    $delete_query = "DELETE FROM `$table` WHERE `$column` = '$id'";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        // Redirect to the appropriate page after deletion
        header("Location: http://localhost/PHP/abgd/?nav=" . $table);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Required parameters not specified.";
}
?>
