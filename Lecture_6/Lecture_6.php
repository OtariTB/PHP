<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture_6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d1">
        <h3>Failis atvirtva</h3>
        <form action="" method = "post" enctype="multipart/form-data">
            <input type="file" class = "inp" name = "f_name">
            <button class="b1" name = "upFile">Upload File</button>
            <?php
            $dr_name = "storage/";
            $f_maxsize = 4 * 1024 * 1024;
            if(isset($_POST["upFile"])){
                echo "<pre>";
                print_r($_FILES);
                echo "</pre>";
                $f_info = $_FILES['f_name'];
                $f_type = pathinfo($f_info['name']['extention']);
                $allowed_types = ["txt"];
                if($f_info['size'] < $f_maxsize){
                    move_uploaded_file($f_info['tmp_name'], "storage/".$f_info['name']. time().pathinfo($f_info['name']['extention']) );
                }else{
                    echo"<p class = 'error'>File size too big</p>";
                }
            }
            ?>
        </form>

        <div class="file-list">

        </div>
    </div>
</body>
</html>