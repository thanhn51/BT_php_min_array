<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$c = [4, 66, 3, 5, 7, 2, 7, 3, 2, 6, 2, 9];
function minIndex($a)
{
    $b = $a;
    sort($b);
    $min = $b[0];
    for ($i = 0; $i < count($a); $i++){
        if ($min == $a[$i]){
            printf($i);
            echo "<br>";
        }
    }
}
echo "index min trong mảng đã cho là: <br>";
minIndex($c);
?>
</body>
</html>