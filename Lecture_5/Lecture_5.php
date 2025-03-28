<?php
    include "folder_file.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d1">
        <form method = "post">
            <input name = "dir_name" type="text" class="inp" style = "width : 25%; border-radius : 12px;">
            <button class="b1" name = "cfolder">Create a Folder</button>
            <span class = "error"><br><?= $error_fold ?></span>
            <br><br>
            <input name = "f_name" type="text" class="inp" style = "width : 25%; border-radius : 12px;">
            <button class="b1" name = "cfile">Create a File</button>
            <span class = "error"><br><?= $error_file ?></span>
        </form>

    </div>
    <br><br>
    <div class="d1">
        <form method = "post">
            <table style = "width : 100%;">
                
                <tr>
                    <th>Status</th>
                    <th>Size</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                    <?php
                        for($i = 2; $i <= count($content) - 1; $i++){
                    ?>
                    <tr>
                        <td>
                            <?php
                            if(is_dir($storage_patch."/".$content[$i])){
                                echo "Folder";
                                }
                                else{
                                    echo "File";
                                }
                            ?>
                        </td>
                        <td>
                            <?= filesize($storage_patch."/".$content[$i]) ?>
                        </td>
                        <td><?= $content[$i]?></td>
                        <td>
                            <a href="Lecture_5.php?delete=<?= $content[$i] ?>">Delete</a>
                        </td>
                        <td>
                            <a href="?insert=<?= $content[$i] ?>">Insert</a>
                        </td>
                        <td>
                            <a href="?read=<?= $content[$i] ?>">Read</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
            </table>
            <div class="d1">
                <?php
                if(isset($_GET['insert'])){
                    include "insert.php";
                }else{
                    include "read.php";
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>