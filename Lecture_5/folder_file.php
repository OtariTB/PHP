<?php
    $error_fold = "";
    $error_file = "";

    if (isset($_POST['cfolder'])) {
        $dir_name = $_POST['dir_name'];
        if(!empty($dir_name) && !is_dir("storage/".$dir_name)){
            mkdir("storage/".$dir_name);
        }elseif(empty($dir_name)){
            $error_fold = "Folder is empty.";
        }elseif(is_dir("storage/".$dir_name)){
            $error_fold = "Folder already exists.";
        }
    }
    if (isset($_POST['cfile'])) {
        $f_name = $_POST['f_name'];
        if(!empty($f_name) && !is_file("storage/".$f_name.".txt")){
            fopen("storage/".$f_name.".txt","w");
        }elseif(empty($f_name)){
            $error_file = "File is empty.";
        }elseif(is_file("storage/".$f_name.".txt")){
            $error_file = "File already exists.";
        }
    }

    if (isset($_GET['delete'])) {
        $item_to_delete = $_GET['delete'];
        $path = "storage/" . $item_to_delete;
        if (is_dir($path)) {
            array_map('unlink', glob("$path/*.*"));
            rmdir($path);
        } else {
            unlink($path);
        }
    }

    $storage_patch = "storage";
    $content = scandir($storage_patch);
?>