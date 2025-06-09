<?php
include_once "connect.php";
    $query = "SELECT * FROM maswavlebeli";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<table border='1' style='width: 100%; border-collapse: collapse;'>";
        echo "<tr>
                <th>ID</th>
                <th>სახელი</th>
                <th>გვარი</th>
                <th>ნომერი</th>
                <th>Delete</th>
              </tr>";
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['mas_id'] . "</td>";
                echo "<td>" . $row['Saxeli'] . "</td>";
                echo "<td>" . $row['Gvari'] . "</td>";
                echo "<td>" . $row['Nomeri'] . "</td>";
                echo "<td> <a href='cms/inculdes/masDelete.php?drop=" . $row['mas_id'] . "'>Delete</a> </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "მასწავლებელი ვერ მოიძებნა";
        }
    
        mysqli_close($conn);
    
?>