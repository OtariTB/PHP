<?php
    include_once "connect.php";


    $sql = "SELECT * FROM sagnebi";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' style='width: 100%; border-collapse: collapse;'>";
        echo "<tr>
                <th>ID</th>
                <th>საგნის სახელი</th>
                <th>წაშლა</th>
              </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['s_id'] . "</td>";
            echo "<td>" . $row['Dasaxeleba'] . "</td>";
            echo "<td> <a href='cms/inculdes/delete.php?drop=" . $row['s_id'] . "'>Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo " <a href='cms/inculdes/sAdd.php?add='>Add</a> ";
    } else {
        echo "საგნები ვერ მოიძებნა";
    }

    mysqli_close($conn);
?>