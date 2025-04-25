<?php
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM roles WHERE id = '$id'");
    $rows = mysqli_fetch_assoc($result);
?>

<form method="post">
    <input type="text" name="role" value="<?=$rows['status']?>"> - <input type="submit" value="რედაქტირება" name="edit">
</form>

<?php
    if(isset($_POST['edit'])){
       $status = $_POST['role'];
       mysqli_query($conn, "UPDATE roles SET status='$status' WHERE id='$id'");
       header("location: index.php?nav=role&edit=$id");
    }
?>
