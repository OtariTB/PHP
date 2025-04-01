<div>
    <form action="" method = "post">
        <textarea name="text_f" rows="10" cols="30"></textarea>
        <br><br>
        <button class="b1" name = "insert_f">Insert</button>
    </form>
</div>

<?php
if (isset($_POST['insert_f'])) { // Added missing parenthesis
    $text = $_POST['text_f'];
    $file = fopen($_GET['insert'], "a"); // Added missing comma
    fwrite($file, $text);
    fclose($file);
    header("Location: Lecture_5.php"); // Corrected header syntax
}
?>