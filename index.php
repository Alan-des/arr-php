<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $A = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $B = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];


    $sums = [];


    for ($i = 0; $i < count($A); $i++) {
        $sums[$i + 1] = $A[$i] + $B[$i];
    }

    echo "Суми відповідних елементів:\n";
    foreach ($sums as $index => $sum) {
        echo "Сума елементів на позиції $index: $sum\n";
    }
    ?>



</body>

</html>