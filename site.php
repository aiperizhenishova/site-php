<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "Hello World! <br>";
        echo strtoupper($phrase);
        echo strlen($phrase). "<br>";
        $phrase[0] = "F";
        echo $phrase;
        echo str_replace("F", "L", $phrase);
        echo substr($phrase, 6, 4). "<br>";

        echo "Aiperi" [2]. "<br>";

        $num = 10;
        $num++;
        $num += 25;
        echo $num. "<br>";

        echo abs(-100). "<br>";
        echo pow(2, 2). "<br>";
        echo sqrt(100). "<br>";
        echo max(101, 100). "<br>";
        echo min(101, 100). "<br>";
        echo round(3.57). "<br>";
        echo ceil(5.17). "<br>";
        echo floor(5.17). "<br>";

    ?>
</body>
</html>