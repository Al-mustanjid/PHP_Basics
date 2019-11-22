<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo 56 + 56;
        echo "<br/>";

        echo 56 - 46;
        echo "<br/>";

        echo 56 * 59;
        echo "<br/>";

        echo 56 / 3;
        echo "<br/>";
        
        echo 4*8+5 / 10;
        echo "<br/>";

        //now we see how order process work in php
        echo 5 + 5 * 10; //output : 55 as following the order process
        echo "<br/>";
        echo (5+5)*10; //output: 100
    ?>
</body>
</html>