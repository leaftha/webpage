<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>calendar</title>
    <style>
    table {

        border-spacing: 0;
    }


    table td {
        text-align: center;
    }
    </style>
</head>

<body>
    <form action="homework5.php" method="post">
        <label>년도:</label>
        <input type="number" name="year">
        <label>달:</label>
        <input type="number" min=1 max=12 name="month">
        <input type="submit" value="보기">
    </form>
    <?php 


	$year = isset($_POST['year']) ? $_POST['year'] : date('Y');
	$month = isset($_POST['month']) ? $_POST['month'] : date('m');

	$date = "$year-$month-01"; 
	$time = strtotime($date);
	$start_week = date('w', $time); 
	$total_day = date('t', $time); 
	$total_week = ceil(($total_day + $start_week) / 7);
?>


    <table border="1">
        <p><?php echo "$year 년 $month 월" ?></p>
        <tr>
            <th>일</th>
            <th>월</th>
            <th>화</th>
            <th>수</th>
            <th>목</th>
            <th>금</th>
            <th>토</th>
        </tr>

        <?php for ($n = 1, $i = 0; $i < $total_week; $i++): ?>
        <tr>
            <?php for ($k = 0; $k < 7; $k++): ?>
            <td>
                <?php if ( ($n > 1 || $k >= $start_week) && ($total_day >= $n) ): ?>
                <?php echo $n++ ?>
                <?php endif ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>

</body>


</html>