<?php 

	if ($_SERVER['HTTP_HOST']=='localhost') {
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'root';
		$DB_PASS_READER = 'Silpakorn60';
		$DB_NAME = 'db991_exchange';
		echo "<br>";
		// echo "localhost : ";
	}else{
		// บน server imsu.co
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580199';
		$DB_PASS_READER = 'Lqso9TG36g';
		$DB_NAME = 'db13580199';
	}
	// คำสั่งที่ใช้ต่อกับ ฐานข้อมูล
	$conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);
	// ตรวจสอบว่าต่อสำเร็จหรือไม่
	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
	}
	mysqli_set_charset($conn, "utf8");

?>