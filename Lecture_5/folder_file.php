<?php
    $error_fold = "";
    $error_file = "";
    $storage_patch = "Lecture_5/storage/";

    if (isset($_POST['cfolder'])) {
        $dir_name = $_POST['dir_name'];
        if (!empty($dir_name)) {
            if (!mkdir($storage_patch . '/' . $dir_name, 0777, true)) {
                $error_fold = 'Failed to create folder.';
            }
        } else {
            $error_fold = 'Folder name cannot be empty.';
        }
    }
    if (isset($_POST['cfile'])) {
        $f_name = $_POST['f_name'];
        if (!empty($f_name)) {
            if (file_put_contents($storage_patch . '/' . $f_name, '') === false) {
                $error_file = 'Failed to create file.';
            }
        } else {
            $error_file = 'File name cannot be empty.';
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