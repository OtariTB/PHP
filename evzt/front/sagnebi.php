<?php
include_once "connection.php";

$query = "SELECT * FROM sagani";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<table border='1' style='width: 100%; border-collapse: collapse;'>";
        echo "<tr>
            <th>ID</th>
            <th>საგნის სახელი</th>
            <th>წაშლა</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['s_id'] . "</td>";
            echo "<td>" . $row['Dasaxeleba'] . "</td>";
            echo "</tr>";
            
        }
        echo "</table>";
    }
}else{
    echo "საგნის araa";
}
?>