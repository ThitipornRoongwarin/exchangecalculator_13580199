<?php 
	
	//ส่งมาแบบ post
	//$thb = $_POST['attribute name']
	$thb = $_POST['thb'];
	$type1 = $_POST['type1'];

	if ($type1 == "usd") {
		$result = $thb / 31.1382;
	}else if ($type1 == "jyp") {
		$result = $thb / 28.9892;
	}else if ($type1 == "krw") {
		$result = $thb / 0.0290;
	}else if ($type1 == "gbp") {
		$result = $thb / 43.3646;
	}else if ($type1 == "eur") {
		$result = $thb / 38.1591;
	}

	//-----------------------

	// if ($type1=="usd") {
	// 	$rate = 31.1382;
	// }elseif ($type1=="jyp") {
	// 	$rate = 28.9892;
	// }elseif ($type1=="krw") {
	// 	$rate = 0.0290;
	// }elseif ($type1=="gbp") {
	// 	$rate = 43.3646;
	// }elseif ($type1=="eur") {
	// 	$rate = 38.1591;
	// }

	// echo "Result = ".$thb/$rate;
	// echo "<br>";

	//-----------------------

	// switch ($type1) {
	// 	case 'usd':
	// 		$rate = 31.1382;
	// 		break;
	// 	case 'jyp':
	// 		$rate = 28.9892;
	// 		break;	
	// 	case 'krw':
	// 		$rate = 0.0290;
	// 		break;
	// 	case 'gbp':
	// 		$rate = 43.3646;
	// 		break;
	// 	case 'eur':
	// 		$rate = 38.1591;
	// 		break;

	// 	default:
	// 		$rate=0;
	// 		break;
	// }

	// echo "Result=".$thb/$rate;
	// echo "<br>";
	
	require 'connect.php';
	$sql = "INSERT INTO exch991_history(thb, calculated, currency) VALUES ($thb, $result, '$type1')";
	
	$sql_exe = $conn -> query($sql);
	
 ?>

<!DOCTYPE html>
<html>

	<head>
	 	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 	<title>Result</title>
	</head>

	<body>	 	
	 	<div class="container">
	 		<h3 >ผลลัพธ์</h3>
	 		<?php 
		 		echo "จำนวนเงิน คือ ".$thb;
				echo "<br>";
				echo "สกุลเงินที่ใช้คำนวณ คือ ".$type1;
				echo "<br>";
				echo "ผลลัพธ์ คือ ".$result;
				echo "<br>";
		 		$sql = "SELECT * FROM exch991_history ORDER BY dateRecord DESC";
		 		$sql_exe = $conn -> query($sql);
	 		?>

		 	<table class="table table-striped">		 		
		 		<thead>
		 			<tr>
		 				<br>
		 			</tr>
			 		<tr>
			 			<th>จำนวนเงิน</th>
			 			<th>สกุลเงินที่ใช้คำนวณ</th>
			 			<th>ผลลัพธ์</th>
			 			<th>วันและเวลาที่</th>
			 			<th>ลบข้อมูล</th>
			 		</tr>
		 		</thead>
			 	<?php
			 		while ($row = mysqli_fetch_assoc($sql_exe)) {
			 			// echo $array['field name'];
			 			echo "<tr>
			 					<td>".$row['thb']."</td>
			 					<td>"."exchange to ".$row['currency']."</td>"."
			 					<td>".$row['calculated']."</td>
			 					<td>"." at ".$row['dateRecord']."</td>";
			 	?>

			 	<td><a <?php echo 'href="delete.php?id='.$row['recordID'].'&thb='.$row['thb'].'"' ?>>Delete</a></td>
			 	<tr>

			 	<?php
			 		}
			 		$conn->close();
			 	?>

		 	</table>
		</div>
		<br>
	</body>

</html>