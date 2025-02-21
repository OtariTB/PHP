<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Lecture2</title>
</head>
<body>

<div style="width: 50%; margin: auto; border: solid 1px black; padding: 20px; text-align: center; background-color: rgb(183, 225, 238); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">
    <?php
    $name = 'Otari';
    $mark = rand(0 ,100);
    $student = ["name" => $name, "mark" => $mark];

    $students = [
        'oto' => rand(0,100),
        'levani' => rand(0,100),
        'vaja' => rand(0,100),
        'leila' => rand(0,100),
        'miriani' => rand(0,100)
    ];
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    $sum = 0;
    $maxgrade = 0;
    foreach ($students as $key => $grade) {
        echo "<h3> Student : $key <br> Grade $grade</h3>";
        $sum += $grade;
        if($maxgrade < $grade) $maxgrade = $grade;
    }

    $avggrade = ($sum / count($students));
    echo "<h2> Qulebis Jamia : $sum </h2>";
    echo "<h2> Qulebis Sashualoa : " . ($sum / count($students)) . "</h2>";
    echo "<h2> Maqsimaluri qulaa : " . $maxgrade . "</h2>";

    foreach ($students as $key => $grade) {
        if($grade > $avggrade){
            echo "<h3> Student : $key <br> Grade $grade</h3>";
        }
    }

    ?>
</div>

</body>
</html>