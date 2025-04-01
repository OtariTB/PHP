<div>
    <?php
    if (isset($_GET['read'])) {
        $file = $_GET['read'];
        if (file_exists($file)) {
            $f = fopen($file, 'r');
            $content = fread($f, filesize($file));
            fclose($f); // Close the file handle
            echo $content;
        } else {
            echo "Error: File does not exist.";
        }
    } else {
        echo "Error: No file specified to read.";
    }
    ?>
</div>