<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body><br><br><br><br>
		<div class="col-md-6 col-md-offset-3 bg-success img-rounded" >
			<h3 >ลบข้อมูลสำเร็จแล้ว</h3>
			<?php
				$id = $_REQUEST['id'];
				$thb = $_REQUEST['thb'];

				$sql = "DELETE FROM exch991_history WHERE recordID = $id";

				require 'connect.php';

				$sql_exe = $conn -> query($sql);

				if ($sql_exe) {
					echo "Delete complete!"; 
					echo "<br>";
					echo "Delete ID : ".$id;
					echo "<br>";
					echo "THB : ".$thb;
					echo "<br>";
					echo "<br>";
					// header("location:index.php",4);
				}else{
					echo "Delete failed";
				}
			?>
		</div>

	</body>
</html>

