<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <table>
        <tr>
            <th>Questions</th>
            <th>Answers</th>
            <th>Max Points</th>
        </tr>
<?php
include 'questions.php';

        for($i =0 ; $i <count($questions) ; $i++){
            echo "<tr>";
            echo "<td>".$questions[$i]['question']."</td>";
            echo "<td><input class = 'inp' placeholder = 'Sheiyvanet Pasuxi'></input></td>";
            echo "<td>".$questions[$i]['maxpoint']."</td>";
            echo "</tr>";
        }

        /*foreach ($questions as $index => $question){

            echo "<tr>";
            echo "<td>".$question['question']."</td>";
            echo "<td><input class = 'inp'></input></td>";
            echo "<td>".$question['maxpoint']."</td>";

            echo "</tr>";
        }*/
        
        ?>
        <tr>
            <td colspan="3" style = "text-align : center;">
            <input class = "inp" type="text" placeholder = "Sheiyvanet saxeli">
            <input class = "inp" type="text" placeholder = "Sheiyvanet gvari">
            <button class="b1">Submit</button>
            </td>
        </tr>
    </table>

</body>
</html>
