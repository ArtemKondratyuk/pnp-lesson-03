<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <title>PHP</title>
</head>
<body>
 <div class="php">  
<?php 
 
$x = 10;
$y = 30;

echo $x + $y. '</br>';
echo $x - $y. '</br>';
echo $x * $y. '</br>';
echo $x / $y. '</br>';
echo $x % $y. '</br>';

$x += 20; //$x = $x + 20;
echo $x. '</br>';
$y -= 20; //$y = $y + 20;
echo $y. '</br>';

$x ++; //$x += 1;
echo $x ++ . '</br>'; 
$y --; //$y -= 1;
echo $y -- . '</br>';

echo M_PI. '</br>';
echo M_E. '</br>';

echo abs (-22). '</br>'; 
echo ceil (3.3). '</br>';
echo floor (3.3). '</br>';
echo round (3.3). '</br>';
echo round (3.6). '</br>';
echo round (3.6734836, 4). '</br>';
echo mt_rand (1, 45). '</br>';

$rand = mt_rand (1, 35);
$rand ++;
echo $rand. '</br>';

echo min ( 4, 6, 8, 3, 9, 2, 7, 5). '</br>';
echo max ( 4, 6, 8, 3, 9, 2, 7, 5). '</br>';





?>
 </div>
</body>
</html>