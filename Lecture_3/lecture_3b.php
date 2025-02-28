<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="lecture_3ba.php" method = "post" style = "width: 100%;">
        
    
    <table>
        <tr>
            <th>Questions</th>
            <th>Answers</th>
            <th>Max Points</th>
        </tr>
<?php
include 'questions.php'
?>

            <?php
                for($i=0; $i<count($questions); $i++){
            ?>
            <tr>
                <td><?=$questions[$i]['question']?></td>
                <td><input class = "inp" type="text" name="answer[]"></td>
                <td><?=$questions[$i]['maxpoint']?></td>
            </tr>
            <?php
                }
            ?>


        <tr>
            <td colspan="3" style = "text-align : center;">
            <input name = 'saxeli' class = "inp" type="text" placeholder = "Sheiyvanet saxeli">
            <input name = 'gvari' class = "inp" type="text" placeholder = "Sheiyvanet gvari">
            <button class="b1">Submit</button>
            </td>
        </tr>
    </table>

    </form>
    

</body>
</html>
