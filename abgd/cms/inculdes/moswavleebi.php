<?php
    include_once "connect.php";

    $sql = "SELECT * FROM moswavle";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' style='width: 100%; border-collapse: collapse;'>";
        echo "<tr>
                <th>ID</th>
                <th>სახელი</th>
                <th>გვარი</th>
                <th>კლასი</th>
                <th>Delete</th>
              </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['m_id'] . "</td>";
            echo "<td>" . $row['Saxeli'] . "</td>";
            echo "<td>" . $row['Gvari'] . "</td>";
            echo "<td>" . $row['Nomeri'] . "</td>";
            echo "<td> <a href='cms/inculdes/mDelete.php?drop=" . $row['m_id'] . "'>Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "მოსწავლეები ვერ მოიძებნა";
    }

    mysqli_close($conn);
?>
