<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
    <h1>Welcome To My First PHP Page</h1>
    <br>

    <?php
    $a = "Hello";
    $b = "Nithushan";
    $x = 5;
    $y = 5;

    ?>
    
    <?php
    echo"$a World<br>";
    echo"Hello $b<br>";
    echo"Hello", "Nithushan", "How", "are", "You", "<br>";
    echo $x + $y;
    
    ?>

    <?php
    print "<h2>Hello<h2>";
    print "<h2>Hello<h2>";
    ?>

    <?php
    $x = 5;
    $a = 8;
    var_dump($x + $a);
    ?>
</body>
</html>