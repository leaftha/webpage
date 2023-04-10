<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>도형계산기</title>
</head>

<body>
    <h1>도형 계산기</h1>
    <form action="homework4.php" method="post">
        <h2>삼각형</h2>
        <label>밑변:</label>
        <input type="number" name="tri_base_1">
        <label>높이:</label>
        <input type="number" name="tri_height_1">
        <input type="submit" value="계산하기">

        <?php
			if(isset($_POST['tri_base_1']) && isset($_POST['tri_height_1'])) {
				$tri_base_1 = $_POST['tri_base_1'];
				$tri_height_1 = $_POST['tri_height_1'];
				$tri_area_1 = $tri_base_1 * $tri_height_1 / 2;
				echo "삼각형 면적: " . $tri_area_1 . "<br><br>";
			}
		?>
        <h2>직사각형</h2>
        <label>가로:</label>
        <input type="number" name="rec_width">
        <label>세로:</label>
        <input type="number" name="rec_height">
        <input type="submit" value="계산하기">

        <?php
			if(isset($_POST['rec_width']) && isset($_POST['rec_height'])) {
				$rec_width = $_POST['rec_width'];
				$rec_height = $_POST['rec_height'];
				$rec_area = $rec_width * $rec_height;
				echo "직사각형의 면적: " . $rec_area . "<br><br>";
			}
		?>

        <h2>원</h2>
        <label>반지름:</label>
        <input type="number" name="circle_radius">
        <input type="submit" value="계산하기">

        <?php
			if(isset($_POST['circle_radius'])) {
				$circle_radius = $_POST['circle_radius'];
				$circle_area = pi() * pow($circle_radius, 2);
				echo "원의 면적: " . $circle_area . "<br><br>";
			}
		?>
        <h2>직육면체</h2>
        <label>가로:</label>
        <input type="number" name="cub_width">
        <label>세로:</label>
        <input type="number" name="cub_length">
        <label>높이:</label>
        <input type="number" name="cub_height">
        <input type="submit" value="계산하기">

        <?php
			if(isset($_POST['cub_width']) && isset($_POST['cub_length']) && isset($_POST['cub_height'])) {
				$cub_width= $_POST['cub_width'];
				$cub_height = $_POST['cub_height'];
                $cub_length = $_POST['cub_length'];
				$cub_area = $cub_width * $cub_height *$cub_length;
				echo "직육면체의 면적: " . $cub_area . "<br><br>";
			}
		?>
        <h2>원통</h2>
        <label>반지름:</label>
        <input type="number" name="cy_radius">
        <label>높이:</label>
        <input type="number" name="cy_height">
        <input type="submit" value="계산하기">

        <?php
			if(isset($_POST['cy_radius']) && isset($_POST['cy_height'])) {
				$cy_radius = $_POST['cy_radius'];
				$cy_height = $_POST['cy_height'];
				$cy_area = pi() * pow($cy_radius, 2) * $cy_height;
				echo "원통의 면적: " . $cy_area . "<br><br>";
			}
		?>
        <h2>구</h2>
        <label>반지름:</label>
        <input type="number" name="nin_radius">
        <input type="submit" value="계산하기">

        <?php
			if(isset($_POST['nin_radius'])) {
				$nin_radius = $_POST['nin_radius'];
				$nin_area = 4/3*pi()*pow( $nin_radius,3);
				echo "구의 면적: " . $nin_area . "<br><br>";
			}
		?>
</body>

</html>
