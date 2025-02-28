<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<table>
    <tr>
        <th colspan="4"> Student : <?=$_POST['saxeli'] ." ".$_POST['gvari']?></th>
    </tr>
        <tr>
            <td>Questions</td>
            <td>Answers</td>
            <td>Max Points</td>
            <td>Your Mark</td>
        </tr>
<?php
include 'questions.php';
?>

        <?php
            for($i=0; $i<count($questions); $i++){
        ?>
        <tr>
            <td><?=$questions[$i]['question']?></td>
            <td><?=$_POST["answer"][$i]?></td>
            <td><?=$questions[$i]['maxpoint']?></td>
            <td><input class = "inp" type="text"></td>
        </tr>
        <?php
            }
        ?>
        
        <tr>
            <td colspan="4" style = "text-align : center;">
            <input class = "inp" type="text" placeholder = "Sheiyvanet saxeli">
            <input class = "inp" type="text" placeholder = "Sheiyvanet gvari">
            <button class="b1">Submit</button>
            </td>
        </tr>
    </table>
</body>
</html>