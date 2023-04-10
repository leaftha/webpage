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
    $data = array();

    for ($i = 0; $i < $n; $i++) {
        $data[$i] = rand(10, 100);
    }

    echo "Original: ";
    print_r($data );
    echo"<br>\n";


    for($x = 0; $x < $n; $x++){
        for($y = 0; $y < $n; $y++){
            if($data[$x] < $data[$y]){
                $tmp = $data[$x];
                $data[$x] = $data[$y];
                $data[$y] = $tmp;
            }
        }
    }
    echo "Sorted: ";
    print_r($data);
    ?>
</body>
</html>
