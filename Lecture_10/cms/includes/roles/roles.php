<div>Roles - <a href="?nav=role&action=add">დამატება</a></div>
<?php
    $q_roles = "SELECT * FROM roles";
    $result = mysqli_query($conn,$q_roles);
    //$row_roles = mysqli_fetch_all($result);
    $row_roles = mysqli_fetch_assoc($result);
    echo "<pre>";
    //print_r($row_roles);
    echo "</pre>";
?>
<?php
    if(isset($_GET['action']) && $_GET['action']=="add"){
        include "insert.php";
    }else if(isset($_GET['drop'])){
        $id = $_GET['drop'];
        $query_delete = "DELETE FROM roles WHERE id = '$id'";
        mysqli_query($conn,$query_delete);
        header("location: index.php?nav=role");
    }else if(isset($_GET['edit'])){
        include "edit.php";
    }

?>

<form method="post">
    <input type="text" name = "role"> - <input type="submit" value="დამატება" name = "add">
</form>
<table class="datatable">
    <tr>
        <th>Id</th>
        <th>status</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
    <?php
    while($row_roles = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?=$row_roles['id']?></td>
        <td><?=$row_roles['status']?></td>
        <td><?=$row_roles['created_at']?></td>
        <td><a href="?nav=role&edit=<?=$row_roles['id']?>">Edit</a> <a href="?nav=role&&drop=<?=$row_roles['id']?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>