<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="dist/css/bootstrap-select.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  	<script src="dist/js/bootstrap-select.js"></script>
	  	<link rel="stylesheet" type="text/css" href="dist/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body>
		<div id="app"><br><br><br><br>
			<div class="col-md-6 col-md-offset-3 ">
				<form action="calculate-result.php" method="post" class="cov-frm" name="frm" onsubmit="return myFunction()" >
					<br>
					<h3 >เครื่องคำนวณอัตราการแลกเปลี่ยน</h3>
					<div class="form-group">
						<label class="control-label" for="inputWarning1">ระบุจำนวนเงินที่ท่านต้องการแลกเปลี่ยน</label>
						<br>
						<input type="number" class="form-control" name="thb" placeholder="กรุณาใส่ค่าเป็นตัวเลข" id="innumb" required>
						<p class="text-danger" id="demo"></p>
					</div>
					<label>กรุณาเลือกสกุลเงินที่ท่านมี</label>
					<br>
					<select name="type1" class="form-control">
						<option value="usd">THB</option>
					</select>
					<br>
					<label>สกุลเงินที่ต้องการคำนวณ</label>
					<br>
					<select name="type1" class="selectpicker form-control">
						<option value="usd" data-icon="usd">USD</option>
						<option value="jyp" data-icon="jyp">JYP</option>
						<option value="krw" data-icon="krw">KRW</option>
						<option value="gbp" data-icon="gbp">GBP</option>
						<option value="eur" data-icon="eur">EUR</option>
					</select>
					<br><br>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
					<br><br>
				</form>
			</div>
		</div>
	</body>
</html>

<script>

	function myFunction() {
	    var x, text;

	    x = document.forms["frm"]["thb"].value;

	    if (x <= 0) {
	        text = "กรุณาใส่ตัวเลขที่ไม่ติดลบ";     
	        document.getElementById("demo").innerHTML = text;
	        return false;
	    }    
	}
</script>