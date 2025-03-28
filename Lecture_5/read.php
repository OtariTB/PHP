<div>
    <?php
    $file = $_GET['read'];
    $f = fopen($file, 'r');
    $content = fread($f, filesize($file));
    fclose($file);
    echo $content;
    ?>
</div>