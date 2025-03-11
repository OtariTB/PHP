<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 2.4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <h3>მანქანები :</h3>
        <table>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Color</th>
                <th>Mileage</th>
                <th>Status</th>
            </tr>

        
         <?php
         $cars = [
            ["Make" => 'Toyota',
            "Model" => 'Corolla',
            "Color" => 'White',
            "Mileage" => 24000,
            "Status" => 'Sold'],

            ["Make" => 'Toyota',
            "Model" => 'Camry',
            "Color" => 'Black',
            "Mileage" => 56000,
            "Status" => 'Available'],

            ["Make" => 'Honda',
            "Model" => 'Accord',
            "Color" => 'White',
            "Mileage" => 15000,
            "Status" => 'Sold']

         ];


         foreach($cars as $key) {
            echo "<tr>";
            echo "<td>".$key['Make']."</td>";
            echo "<td>".$key['Model']."</td>";
            echo "<td>".$key['Color']."</td>";
            echo "<td>".$key['Mileage']."</td>";
            echo "<td>".$key['Status']."</td>";
            echo "</tr>";
         }

         ?>

        </table>
    </div>
</body>
</html>