<?php

$number = 0;

$number1 = 0;
$number2 = 5;

$number3 = 100;
$number4 = 10;

$number5 = 1;

$number6 = 1;

$number7 = 20;

$number8 = 1;

$number9 = 200;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - Part. III</title>
</head>
<body>
    
    <h1>Exercices PHP</h1>

    <h2>PARTIE III - Les boucles</h2>

    <h3>Exercice 1</h3>
    <p><?php while ($number < 10) {
        echo $number . ' ';
        $number++;
    } ?></p>

    <h3>Exercice 2</h3>
    <p><?php while ($number1 <= 20) {
        $result = $number1 * $number2;
        echo $result . ' ';
        $number1++;
    } ?></p>

    <h3>Exercice 3</h3>
    <p><?php while ($number3 >= 10) {
        $result1 = $number3 * $number4;
        echo $result1 . ' ';
        $number3--;
    } ?></p>

    <h3>Exercice 4</h3>
    <p><?php while ($number5 < 10) {
        echo $number5 . ' ';
        $number5 = $number5 + ($number5 / 2);
    } ?></p>

    <h3>Exercice 5</h3>
    <p><?php while ($number6 <= 15) {
        echo "On y arrive presque !" . ' ';
        $number6++;
    } ?></p>

    <h3>Exercice 6</h3>
    <p><?php while ($number7 >= 0) {
        echo "C'est presque bon !" . ' ';
        $number7--;
    } ?></p>

    <h3>Exercice 7</h3>
    <p><?php while ($number8 <= 100) {
        echo "On tient le bon bout !" . ' ';
        $number8 += 15;
    } ?></p>

    <h3>Exercice 8</h3>
    <p><?php while ($number9 >= 0) {
        echo "Enfin !" . ' ';
        $number9 -= 12;
    } ?></p>


</body>
</html>