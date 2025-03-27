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
                $upload_dir = "uploads/";
                $files = array_diff(scandir($upload_dir), [".",".."]);
                
                if(isset($_POST['btn1'])){
                    if (is_writable($upload_dir)) {

                        $filename = basename($_FILES["file"]["name"]);

                    $file_path = $upload_dir . $filename;
                    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                    $file_size = filesize($_FILES["file"]["tmp_name"]);

                    if ($file_size > 50 * 1024 * 1024){
                        echo "<p class='error'>ფაილი ძალიან დიდია</p>";
                    }else{
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {

                            echo "<p class='success'>ფაილი წარმატებით აიტვირთა</p>";
                        } else {
                            echo "<p class='error'>error</p>";
                    }
                }
            }
        }

                if (isset($_GET["delete"])) {
                    $fileToDelete = $upload_dir . basename($_GET["delete"]);
                    if (file_exists($fileToDelete)) {
                        unlink($fileToDelete);
                        echo "<p class='success'>Faili warmatebit waishala</p>";
                    } else {
                        echo "<p class='error'>faili ver waishala</p>";
                    }
                }
            ?>
        </form>

        <h3>Atvirtuli Filebi:</h3>
        <div class="file-list">
            <?php
            if (count($files) > 0) {
                foreach ($files as $file) {
                    echo "<div class='file-card'>
                        <a href='$upload_dir$file' download> $file</a>
                        <form method='GET'>
                            <input type='hidden' name='delete' value='$file'>
                            <button type='submit' class='b1'> Delete</button>
                        </form>
                    </div>";
                }
            } else {
                echo "<p>No files uploaded yet.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
