<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d1">
        <h3>ნებისმიერი ფაილის ატვირთვა</h3>
        <form action="" method = "post" enctype="multipart/form-data">
            <input type="file" name="file" placeholder="Upload file" class="inp" style="background-color: rgb(143, 189, 199);border: none;">
            <button class="b1" name="btn1">Submit</button>
            <?php
                if(isset($_POST['btn1'])){
                    
                    $upload_dir = "uploads/";
                    $filename = basename($_FILES["file"]["name"]);
                    $file_path = $upload_dir . $filename;
                    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                    $file_size = filesize($_FILES["file"]["tmp_name"]);

                    if ($file_size > 50 * 1024 * 1024){
                        echo "<p class='error'>ფაილი ძალიან დიდია</p>";
                    }else{
                        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
                        echo "<p class='success'>ფაილი წარმატებით აიტვირთა</p>";
                    }
                    
                }
            ?>
        </form>
    </div>
</body>
</html>