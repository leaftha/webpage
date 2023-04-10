<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 30; 
    $fibonacci = array(1, 1); 

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo"<br>\n";
        printf("%d번째  %d 피보나치 %.6f비례\n", $i + 1, $fibonacci[$i], $fibonacci[$i] / $fibonacci[$i - 1]);
    }
    ?>
</body>
</html>
