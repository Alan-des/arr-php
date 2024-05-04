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
        echo "Сума елементів на позиції $index: $sum\n </br>" ;
    }


    $a = rand(-20, 20);
    $c = rand(-20, 20);
    $d = rand(-20, 20);

    $result = 2 * $c - $d / ($a / 4) - 1;
    echo "$result </br>";
    // 2
 // $result = 2 * $c - 42 * $d / ($c + $a) - 1;

    $B = 10;
    $C = 5;
    $E = 3;


    $A = 7 * $B - 4 * $C * $E;


    echo "Значення виразу A = 7 * B - 4 * C * E де B = $B, C = $C, E = $E дорівнює: $A </br>";
    
// 2
// Задаємо значення змінних B та C
// $B = 8;
// $C = 3;

// Обчислюємо значення виразу
// $A = (2 * $B - 2 * $C) / (12 * $B * $C);

// Виводимо результат
// echo "Значення виразу A = (2 * B - 2 * C) / (12 * B * C), де B = $B, C = $C, дорівнює: $A";

    ?>



</body>

</html>